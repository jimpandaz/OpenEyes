<?php
/**
 * (C) OpenEyes Foundation, 2014
 * This file is part of OpenEyes.
 * OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package OpenEyes
 * @link http://www.openeyes.org.uk
 * @author OpenEyes <info@openeyes.org.uk>
 * @copyright Copyright (C) 2014, OpenEyes Foundation
 * @license http://www.gnu.org/licenses/gpl-3.0.html The GNU General Public License V3.0
 */

namespace Service;

/**
 * A reference to a resource (within the same system)
 */
class ResourceReference implements FhirCompatible
{
	/**
	 * @param \StdClass $fhir_object
	 * @return ResourceReference
	 */
	static public function fromFhir(\StdClass $fhir_object)
	{
		$url = $fhir_object->reference;

		if (!preg_match('|(\w+)/(\w+)|', $url, $m)) {
			throw new InvalidValue("Unsupported FHIR resource reference: {$url}");
		}

		if (!($fhir_id = FhirId::parse($m[2]))) {
			throw new InvalidValue("Invalid ID in resource reference: {$url}");
		}

		if (!($resource_type = \Yii::app()->fhirMap->getInternalResourceType($m[1], $fhir_id->getPrefix()))) {
			throw new InvalidValue("Unrecognised ID prefix in resource reference: {$url}");
		}

		return new self($resource_type, $fhir_id->getInternalId());
	}

	// NB these are internal types and IDs, not FHIR/API ones
	private $resource_type;
	private $id;

	/**
	 * @params string $resource_type
	 * @param scalar $id
	 */
	public function __construct($resource_type, $id)
	{
		$this->resource_type = $resource_type;
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getResourceType()
	{
		return $this->resource_type;
	}

	/**
	 * @return scalar
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @return Service
	 */
	public function getService()
	{
		return \Yii::app()->serviceLocator->getServiceForResourceType($this->resource_type);
	}

	/**
	 * @return bool
	 */
	public function isValid()
	{
		return $this->getService()->exists($this->id);
	}

	/**
	 * @return Resource
	 */
	public function resolve()
	{
		return $this->getService()->fetch($this->id);
	}

	/**
	 * @return bool
	 */
	public function canUpdate()
	{
		return $this->getService()->canUpdate($this->id);
	}

	/**
	 * @return bool
	 */
	public function canDelete()
	{
		return $this->getService()->canDelete($this->id);
	}

	/**
	 * @return bool
	 */
	public function delete()
	{
		return $this->getService()->delete($this->id);
	}

	/**
	 * @param StdClass $fhir_object
	 * @return true|OperationOutcome
	 */
	public function fhirUpdate(\StdClass $fhir_object)
	{
		return $this->getService()->fhirUpdate($this->id, $fhir_object);
	}

	/**
	 * @return StdClass
	 */
	public function toFhir()
	{
		return (object)array("reference" => \Yii::app()->fhirMap->getUrl($this));
	}
}
