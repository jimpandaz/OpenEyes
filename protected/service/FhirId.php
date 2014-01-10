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
 * Represents a resource ID from a FHIR point of view (prefix + internal ID)
 */
class FhirId
{
	static public function parse($fhir_id)
	{
		if (!preg_match('/^(\w+)-(\d+)$/', $fhir_id, $m)) return false;

		return new self($m[1], $m[2]);
	}

	private $prefix;
	private $internal_id;

	public function construct($prefix, $internal_id)
	{
		$this->prefix = $prefix;
		$this->internal_id = $internal_id;
	}

	public function __toString()
	{
		return "{$this->prefix}-{$this->id}";
	}

	public function getPrefix()
	{
		return $this->prefix;
	}

	public function getInternalId()
	{
		return $this->internal_id;
	}
}
