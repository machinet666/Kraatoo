<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/client.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/business.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/personal.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function valueAssignPersonalInfo()
{
    $_SESSION['fillUpValue'] = [
        'firstName' => $_SESSION['user']->firstName,
        'lastName' => $_SESSION['user']->lastName,
        'gender' => $_SESSION['user']->gender,
        'dateOfBirth' => $_SESSION['user']->dateOfBirth,
        'email' => $_SESSION['user']->contact->email,
        'phoneNumber' => $_SESSION['user']->contact->phoneNumber,
        'address' => $_SESSION['user']->contact->address,

        'bachelorDegree' => $_SESSION['user']->bachelorDegree,
        'masterDegree' => $_SESSION['user']->masterDegree,
        'specilizedField' => $_SESSION['user']->specilizedField,

        'skillList' => $_SESSION['user']->skillList,
        'tin' => $_SESSION['user']->tin,
        'aboutYourself' => $_SESSION['user']->aboutYourself
    ];
}

function valueAssignPersonalInfoReverse()
{
    $_SESSION['user']->firstName = $_SESSION['fillUpValue']['firstName'];
    $_SESSION['user']->lastName = $_SESSION['fillUpValue']['lastName'];
    $_SESSION['user']->gender = $_SESSION['fillUpValue']['gender'];
    $_SESSION['user']->dateOfBirth = $_SESSION['fillUpValue']['dateOfBirth'];
    $_SESSION['user']->contact->email = $_SESSION['fillUpValue']['email'];
    $_SESSION['user']->contact->phoneNumber = $_SESSION['fillUpValue']['phoneNumber'];
    $_SESSION['user']->contact->address = $_SESSION['fillUpValue']['address'];
    $_SESSION['user']->bachelorDegree = $_SESSION['fillUpValue']['bachelorDegree'];
    $_SESSION['user']->masterDegree = $_SESSION['fillUpValue']['masterDegree'];
    $_SESSION['user']->specilizedField = $_SESSION['fillUpValue']['specilizedField'];
    $_SESSION['user']->skillList = $_SESSION['fillUpValue']['skillList'];
    $_SESSION['user']->tin = $_SESSION['fillUpValue']['tin'];
    $_SESSION['user']->aboutYourself = $_SESSION['fillUpValue']['aboutYourself'];
}

function valueAssignJExperienceInfo()
{
    $_SESSION['fillUpValueJob'] =
        [
            'company' => $_SESSION['job']->company,
            'position' => $_SESSION['job']->position,
            'started from' => $_SESSION['job']->startedFrom,
            'to' => $_SESSION['job']->to,
        ];
}

function valueAssignBusinessInfo()
{
    $_SESSION['fillUpValue'] = [

        'name' => $_SESSION['user']->name,
        'type' => $_SESSION['user']->type,
        'tradelicenseno' => $_SESSION['user']->tradelicenseno,
        'numberofemployees' => $_SESSION['user']->numberofemployees,
        'websiteurl' => $_SESSION['user']->websiteurl,
        'yearofestablishment' => $_SESSION['user']->yearofestablishment,
        'cName' => $_SESSION['user']->cName,
        'cEmail' => $_SESSION['user']->cEmail,
        'cNumber' => $_SESSION['user']->cNumber,
        'email' => $_SESSION['user']->contact->email,
        'phoneNumber' => $_SESSION['user']->contact->phoneNumber,
        'address' => $_SESSION['user']->contact->address,
    ];
}

function valueAssignBusinessInfoReverse()
{
    $_SESSION['user']->name = $_SESSION['fillUpValue']['name'];
    $_SESSION['user']->type = $_SESSION['fillUpValue']['type'];
    $_SESSION['user']->tradelicenseno = $_SESSION['fillUpValue']['tradelicenseno'];
    $_SESSION['user']->numberofemployees = $_SESSION['fillUpValue']['numberofemployees'];
    $_SESSION['user']->websiteurl = $_SESSION['fillUpValue']['websiteurl'];
    $_SESSION['user']->yearofestablishment = $_SESSION['fillUpValue']['yearofestablishment'];
    $_SESSION['user']->cName = $_SESSION['fillUpValue']['cName'];
    $_SESSION['user']->cEmail = $_SESSION['fillUpValue']['cEmail'];
    $_SESSION['user']->cNumber = $_SESSION['fillUpValue']['cNumber'];
    $_SESSION['user']->contact->email = $_SESSION['fillUpValue']['email'];
    $_SESSION['user']->contact->phoneNumber = $_SESSION['fillUpValue']['phoneNumber'];
    $_SESSION['user']->contact->address = $_SESSION['fillUpValue']['address'];
}

function valueAssignClientInfo()
{
    $_SESSION['fillUpValue'] = [

        'firstName' => $_SESSION['user']->firstName,
        'lastName' => $_SESSION['user']->lastName,
        'nid' => $_SESSION['user']->nid,
        'projectArea' => $_SESSION['user']->projectArea,
        'organizationname' => $_SESSION['user']->organizationname,
        'organizationtype' => $_SESSION['user']->organizationtype,
        'website' => $_SESSION['user']->website,
        'email' => $_SESSION['user']->contact->email,
        'phoneNumber' => $_SESSION['user']->contact->phoneNumber,
        'address' => $_SESSION['user']->contact->address

    ];
}

function valueAssignClientInfoReverse()
{
    $_SESSION['user']->firstName = $_SESSION['fillUpValue']['firstName'];
    $_SESSION['user']->lastName = $_SESSION['fillUpValue']['lastName'];
    $_SESSION['user']->nid = $_SESSION['fillUpValue']['nid'];
    $_SESSION['user']->projectArea = $_SESSION['fillUpValue']['projectArea'];
    $_SESSION['user']->organizationname = $_SESSION['fillUpValue']['organizationname'];
    $_SESSION['user']->organizationtype = $_SESSION['fillUpValue']['organizationtype'];
    $_SESSION['user']->website = $_SESSION['fillUpValue']['website'];
    $_SESSION['user']->contact->email = $_SESSION['fillUpValue']['email'];
    $_SESSION['user']->contact->phoneNumber = $_SESSION['fillUpValue']['phoneNumber'];
    $_SESSION['user']->contact->address = $_SESSION['fillUpValue']['address'];
}

function valueAndErrorAssignBusinessJobPost()
{

    $_SESSION['fillUpErrorJobPost'] = [

        'jobTitle' => '',
        'jobType' => '',
        'jobLocation' => '',
        'aboutUs' => '',
        'overview' => '',
        'salaryFrom' => '',
        'salaryTo' => ''

    ];

    $_SESSION['fillUpValueJobPost'] = [

        'jobTitle' => '',
        'jobType' => '',
        'jobLocation' => '',
        'aboutUs' => '',
        'overview' => '',
        'salaryFrom' => '',
        'salaryTo' => ''

    ];
}

function valueAndErrorAssignClientProject()
{
    $_SESSION['fillUpErrorProjectPost'] = [

        'title' => '',
        'description' => '',
        'skill' => '',
        'complexity' => '',
        'experience' => '',
        'price' => '',
        'type' => '',
        'time' => '',

    ];
    $_SESSION['fillUpValueProjectPost'] = [
        'title' => '',
        'description' => '',
        'skill' => '',
        'complexity' => '',
        'experience' => '',
        'price' => '',
        'type' => '',
        'time' => '',
    ];
}
