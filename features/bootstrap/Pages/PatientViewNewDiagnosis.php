<?php

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class PatientViewNewDiagnosis extends Page
{
    protected $path = "/site/patient/view/";

    protected $elements = array(
        'homeButton' => array('xpath' => "//*[@id='user_nav']//*[contains(text(), 'Home')]"),
        'theatreDiaries' => array('xpath' => "//*[@id='user_nav']//*[contains(text(), 'Theatre Diaries')]"),
        'partialBookingsWaiting' => array('xpath' => "//*[@id='user_nav']//*[contains(text(), 'Partial bookings waiting list')]"),
        'logOut' => array('xpath' => "//*[@id='user_nav']//*[contains(text(), 'Logout')]"),
        'patientSummary' => array('xpath' => "//*[@id='patientID']//*[contains(text(), 'Patient Summary')]"),
        'userProfile' => array('xpath' => "//*[@id='user_id']/a"),
        'addOpthalmicDiagnosis' => array('xpath' => "//button[@id='btn-add_new_ophthalmic_diagnosis']"),
        'selectOphthalmicDisorder' => array('xpath' => "//*[@id='DiagnosisSelection_ophthalmic_disorder_id']"),
        'opthRightEye' => array('xpath' => "//*[@class='diagnosis_eye row field-row']//*[@value='2']"),
        'opthLeftEye' => array('xpath' => "//*[@class='diagnosis_eye row field-row']//*[@value='1']"),
        'opthBothEyes' => array('xpath' => "//*[@class='diagnosis_eye row field-row']//*[@value='3']"),
        'opthDay' => array('xpath' => "//*[@id='add-ophthalmic-diagnosis']//select[@name='fuzzy_day']"),
        'opthMonth' => array('xpath' => "//*[@id='add-ophthalmic-diagnosis']//select[@name='fuzzy_month']"),
        'opthYear' => array('xpath' => "//*[@id='add-ophthalmic-diagnosis']//select[@name='fuzzy_year']"),
        'opthSaveButton' => array('xpath' => "//form[@id='add-ophthalmic-diagnosis']//*[contains(text(),'Save')]"),
        'addSystemicDiagnosis' => array('xpath' => "//button[@id='btn-add_new_systemic_diagnosis']"),
        'selectSystemicDiagnosis' => array('xpath' => "//*[@id='DiagnosisSelection_systemic_disorder_id']"),
        'sysDay' => array('xpath' => "//*[@id='add-systemic-diagnosis']//select[@name='fuzzy_day']"),
        'sysMonth'=> array('xpath' => "//*[@id='add-systemic-diagnosis']//select[@name='fuzzy_month']"),
        'sysYear' => array ('xpath' => "//*[@id='add-systemic-diagnosis']//select[@name='fuzzy_year']"),
        'sysNoEyes' => array('xpath' => "//*[@id='add_new_systemic_diagnosis']//*[@class='diagnosis_eye row field-row']//*[@value='']"),
        'sysRightEye' => array('xpath' => "//*[@id='add_new_systemic_diagnosis']//*[@class='diagnosis_eye row field-row']//*[@value=2]"),
        'sysBothEyes' => array('xpath' => "//*[@id='add_new_systemic_diagnosis']//*[@class='diagnosis_eye row field-row']//*[@value=3]"),
        'sysLeftEye' => array('xpath' => "//*[@id='add_new_systemic_diagnosis']//*[@class='diagnosis_eye row field-row']//*[@value=1]"),
        'sysSaveButton' => array('xpath' => "//*[@class='secondary small btn_save_systemic_diagnosis']"),
        'addPreviousOperation' => array('xpath' => "//*[@id='btn-add_previous_operation']"),
        'commonOperation' => array('xpath' => "//select[@id='common_previous_operation']"),
        'operationDay' => array('xpath' => "//*[@id='add-previous_operation']//select[@name='fuzzy_day']"),
        'operationMonth' => array('xpath' => "//*[@id='add-previous_operation']//select[@name='fuzzy_month']"),
        'operationYear' => array('xpath' => "//*[@id='add-previous_operation']//select[@name='fuzzy_year']"),
        'operationNoEyes' => array('xpath' => "//*[@id='add-previous_operation']//*[@class='row field-row']//*[@value='']"),
        'operationRightEye' => array('xpath' => "//*[@id='add-previous_operation']//*[@class='row field-row']//*[@value=2]"),
        'operationBothEyes' => array('xpath' => "//*[@id='add-previous_operation']//*[@class='row field-row']//*[@value=3]"),
        'operationLeftEye' => array('xpath' => "//*[@id='add-previous_operation']//*[@class='row field-row']//*[@value=1]"),
        'operationSaveButton' => array('xpath' => "//*[@class='secondary small btn_save_previous_operation']"),
        'editCVIstatusButton' => array('xpath'=> "//*[@id='btn-edit_oph_info']"),
        'cviStatus' => array('xpath' => "//select[@id='PatientOphInfo_cvi_status_id']"),
        'CVIDay' => array('xpath' => "//*[@id='edit-oph_info']//select[@name='fuzzy_day']"),
        'CVIMonth' => array('xpath' => "//*[@id='edit-oph_info']//select[@name='fuzzy_month']"),
        'CVIYear' => array('xpath' => "//*[@id='edit-oph_info']//select[@name='fuzzy_year']"),
        'saveCVI' => array('xpath' => "//*[@class='secondary small btn_save_previous_operation btn_save_oph_info']"),
        'addMedicationButton' => array('xpath' => "//button[@id='btn-add_medication']"),
        'selectMedication' => array('xpath' => "//select[@id='drug_id']"),
        'selectRoute' => array('xpath' => "//select[@id='route_id']"),
        'selectFrequency' => array('xpath' => "//select[@id='frequency_id']"),
        'openMedicationDate' => array('xpath' => "//*[@id='start_date']"),
        'hopefullFIX' => array('xpath' => "//form[@id='add-medication']/div[8]"),
        'selectDateFrom' => array('xpath' => "//*[@id='ui-datepicker-div']//*[contains(text(),'10')]"),
        'saveMedication' => array('xpath' => "//*[@class='secondary small btn_save_medication']"),
        'addAllergyButton' => array('xpath' => "//*[@id='btn-add_allergy']"),
        'selectAllergy' => array('xpath' => "//select[@id='allergy_id']"),
        'noAllergyTickbox' => array('xpath' => "//*[@id='no_allergies']"),
        'saveAllergy' => array('xpath' => "//*[@class='secondary small btn_save_allergy']"),
        'addFamilyHistoryButton' => array('xpath' => "//*[@id='btn-add_family_history']"),
        'selectRelativeID' => array('xpath' => "//*[@id='relative_id']"),
        'selectFamilySide' => array('xpath' => "//*[@id='side_id']"),
        'selectFamilyCondition' => array('xpath' => "//*[@id='condition_id']"),
        'enterFamilyComments' => array('xpath' => "//*[@id='comments']"),
        'saveFamilyHistory' => array('xpath' => "//*[@class='secondary small btn_save_family_history']"),
        'createNewEpisodeAddEvent' => array('xpath' => "//*[@class='box patient-info episode-links']//*[contains(text(),'Create episode / add event')]"),
        'addEpisodeButton' => array('xpath' => "//*[@id='add-episode']"),
        'addEpisode' => array('xpath' => "//*[@class='secondary small add-episode']//*[@class='icon-button-small-plus-sign']"),
        'confirmCreateEpisode' => array('xpath' => "//*[@id='add-new-episode-form']//*[contains(text(),'Create new episode')]"),
        'latestEvent' => array('xpath' => "//*[@class='box patient-info episode-links']//*[contains(text(),'Latest Event')]"),
        'removeAllergyButton' => array('xpath' => "//*[@id='patient_allergies']//*[contains(text(),'Remove')]"),
        'removeConfirmButton' => array('xpath' => "//*[@id='delete_allergy']/div[2]//*[contains(text(),'Remove allergy')]")

        );

    public function addOpthalmicDiagnosis ($diagnosis)
    {
        $this->getElement('addOpthalmicDiagnosis')->press();
        $this->getElement('selectOphthalmicDisorder')->selectOption($diagnosis);
    }

    public function selectEye ($eye)
    {
        if ($eye===('Right')) {
        $this->getElement('opthRightEye')->check();
        }
        if ($eye===('Both'))  {
            $this->getElement('opthBothEyes')->check();
        }
        if ($eye===('Left'))  {
            $this->getElement('opthLeftEye')->check();
        }
    }

    public function addOpthalmicDate ($day, $month, $year)
    {
        $this->getElement('opthDay')->selectOption($day);
        $this->getElement('opthMonth')->selectOption($month);
        $this->getElement('opthYear')->selectOption($year);
    }

    public function addSystemicDate ($day, $month, $year)
    {
        $this->getElement('sysDay')->selectOption($day);
        $this->getElement('sysMonth')->selectOption($month);
        $this->getElement('sysYear')->selectOption($year);
    }

    public function addOperationDate ($day, $month, $year)
    {
        $this->getElement('operationDay')->selectOption($day);
        $this->getElement('operationMonth')->selectOption($month);
        $this->getElement('operationYear')->selectOption($year);
    }

    public function addCVIDate ($day, $month, $year)
    {
        $this->getElement('CVIDay')->selectOption($day);
        $this->getElement('CVIMonth')->selectOption($month);
        $this->getElement('CVIYear')->selectOption($year);
    }

    public function saveOpthalmicDiagnosis ()
    {
        $this->getElement('opthSaveButton')->press();
        $this->getSession()->wait(1000,false);
    }

    public function addSystemicDiagnosis ($diagnosis)
    {
        $this->getElement('addSystemicDiagnosis')->press();
        $this->getElement('selectSystemicDiagnosis')->selectOption($diagnosis);
    }

    public function selectSystemicSide ($side)
    {
        if ($side===("None")) {
        $this->getElement('sysNoEyes')->check();
        }
        if ($side===("Right")) {
            $this->getElement('sysRightEye')->check();
        }
        if ($side===("Both")) {
            $this->getElement('sysBothEyes')->check();
        }
        if ($side===("Left")) {
            $this->getElement('sysLeftEye')->check();
        }
        $this->getSession()->wait(3000);

    }

    public function saveSystemicDiagnosis ()
    {
        $this->getElement('sysSaveButton')->press();
        $this->getSession()->wait(1000,false);
    }

    public function previousOperation ($operation)
    {
        $this->getElement('addPreviousOperation')->press();
        $this->getElement('commonOperation')->selectOption($operation);
        $this->getSession()->wait(1000,false);
    }

    public function operationSide ($side)
    {
        if ($side===("None")) {
            $this->getElement('operationNoEyes')->check();
        }
        if ($side===("Right")) {
            $this->getElement('operationRightEye')->check();
        }
        if ($side===("Both")) {
            $this->getElement('operationBothEyes')->check();
        }
        if ($side===("Left")) {
            $this->getElement('operationLeftEye')->check();
        }
    }

    public function savePreviousOperation ()
    {
        $this->getElement('operationSaveButton')->click();
        $this->getSession()->wait(10000);
    }

    public function medicationDetails ($medication, $route, $frequency, $datefrom)
    {
        $this->getElement('addMedicationButton')->click();
        $this->getSession()->wait(3000);
        $this->getElement('selectMedication')->selectOption($medication);
        $this->getSession()->wait(5000, "$.active == 0");
        $this->getElement('selectRoute')->selectOption($route);
        $this->getSession()->wait(5000, "$.active == 0");
        $this->getElement('selectFrequency')->selectOption($frequency);
        $this->getSession()->wait(5000, "$.active == 0");
        $this->getSession()->wait(5000, "$('#ui-datepicker-div').css('display') == 'block'");
        $this->getElement('openMedicationDate')->click();
        $this->getSession()->wait(5000, "$('#ui-datepicker-div').css('display') == 'block'");
        $this->getElement('selectDateFrom')->click($datefrom);
        $this->getSession()->wait(5000, "$.active == 0");
        $this->getElement('saveMedication')->click();
        $this->getSession()->wait(2000);
    }

    public function editCVIstatus ($status)
    {

        $this->getElement('editCVIstatusButton')->click();
        $this->getElement('cviStatus')->selectOption($status);
        $this->getSession()->wait(3000);
    }

    public function saveCVIstatus ()
    {
        $this->getElement('saveCVI')->click();
        $this->getSession()->wait(3000);
    }

    protected function doesRemoveAllergyExist ()
    {
        return (bool) $this->find('xpath', $this->getElement('removeAllergyButton')->getXpath());
    }

    public function removeAllergy ()
    {
        if ($this->doesRemoveAllergyExist())
        {
        $this->getElement('removeAllergyButton')->click();
        $this->getElement('removeConfirmButton')->click();
        $this->getSession()->wait(3000,false);
        }
    }

    public function addAllergy ($allergy)
    {
        $this->getElement('addAllergyButton')->click();
        $this->getSession()->wait(1000,false);
        $this->getElement('selectAllergy')->selectOption($allergy);
        $this->getElement('saveAllergy')->click();
        $this->getSession()->wait(1000,false);
    }

    public function noAllergyTickbox ()
    {
        $this->getElement('addAllergyButton')->click();
        $this->getSession()->wait(1000,false);
        $this->getElement('noAllergyTickbox')->check();
        $this->getElement('saveAllergy')->click();
        $this->getSession()->wait(1000,false);
    }

    public function addFamilyHistory ($relative, $side, $condition, $comments)
    {
        $this->getElement('addFamilyHistoryButton')->click();
        $this->getElement('selectRelativeID')->selectOption($relative);
        $this->getElement('selectFamilySide')->selectOption($side);
        $this->getElement('selectFamilyCondition')->selectOption($condition);
        $this->getElement('enterFamilyComments')->setValue($comments);
        $this->getElement('saveFamilyHistory')->click();
        $this->getSession()->wait(1000,false);
    }

    public function addEpisodeAndEvent()
    {
        $this->getSession()->wait(5000, '$.active == 10');

        if ($this->episodesAndEventsAreNotPresent()) {
            $this->createNewEpisodeAndEvent();
        } else {
            $this->selectLatestEvent();
        }
        $this->getSession()->wait(5000);
    }

    public function createNewEpisodeAndEvent ()
    {
        $this->getElement('createNewEpisodeAddEvent')->click();
    }

    public function addEpisode ()
    {
        $this->getElement('addEpisodeButton')->click();
        $this->getSession()->wait(3000,false);
        $this->getElement('confirmCreateEpisode')->click();
        $this->getSession()->wait(3000,false);
    }

    public function addEpisodePreviousFirmCreated ()
    {
        $this->getElement('addEpisode')->click();
        $this->getSession()->wait(3000,false);
        $this->getElement('confirmCreateEpisode')->click();
    }

    public function selectLatestEvent ()
    {
        $this->getElement('latestEvent')->click();
        $this->getSession()->wait(3000);
    }

    protected function episodesAndEventsAreNotPresent()
    {
        return $this->find('xpath', $this->getElement('createNewEpisodeAddEvent')->getXpath());
    }

}
