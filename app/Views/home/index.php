<?php $session = session(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrialValue Clinical Trial Participant Financial Burden Calculator</title>
    <link rel="icon" type="image/x-icon" href="img/logo+icon.png" sizes="32x32" style="border-radius: 50%;">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- select 2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
    <style>
        label{
            text-transform:none !important;
        }
        .accordion-button:not(.collapsed){
            background: #d4f3fd !important;
        }
        .fs-18{
            font-size:18px !important;
        }
        .container {
            text-transform: capitalize;
        }

        .radio-button {
            width: 150px;
            height: 50px;
            border: 1px solid black;
        }

        .btn-check {
            width: 150px;
            height: 50px;
            border: 1px solid black;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        label {
            padding-top: 10px;
            padding-bottom: 10px;
            text-transform: capitalize;
        }

        .select2 {
            width: 100%;
        }

        #studyburden {
            margin-left: 12%;
        }

        @media only screen and (max-width: 760px) {

            #studyburden {
                margin-left: 0%;
            }
            .rightBorderMobile {
                margin-right: -8px;
            }
        }

        body label{
            font-size:1.2rem !important;
        }


        /* @media only screen and (max-width: 780px) {
            #generaldiv {
                display: none;
            }
        } */
    </style>

    <nav class="navbar" style="background-color: #1b75ba;">
        <div class="container-fluid px-md-5">
            <a class="navbar-brand py-0" href="<?= site_url('/') ?>"><img src="https://images.squarespace-cdn.com/content/v1/57361a632b8ddea9122d41df/1549988293885-DQESSSJFLWMF50WK7KHP/logo%2Bicon.png?format=1500w" height="60"></a>
            <div class="text-white fw-bold" style="font-family: 'Times New Roman';">
                <h2 style="font-size:2.2rem !important;"> </h2>
            </div>

            <div class="d-flex align-items-center" style="font-family: 'Times New Roman';">

                <a href="<?= site_url('contact') ?>">
                    <p class="text-white m-0 fs-5">Contact</p>
                </a>


                <?php if ($session->has('user_id')) { ?>

                    &nbsp;&nbsp;&nbsp;&nbsp; <p class="text-white m-0 fs-5"> <?= $session->get('user_data.name') ?></p>


                <?php } else { ?>
                    <p class="btn text-white mb-2 btn-info ms-3 fs-5" data-bs-toggle="modal" data-bs-target="#signupModal">
                     Register
                    </p>
                <?php } ?>

            </div>

        </div>
    </nav>


    <div class="container-fluid">

        <!-- <div class="mt-5 ms-lg-5" id="generaldiv" style="position: absolute;">
            <label for="exampleFormControlTextarea1 mb-0" class="form-label">general information</label>
            <div class="" id="General_Information" name="General_Information" style="height: 250px;  width: 200px;">

            <p>
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem 
            </p>
            </div>
        </div> -->




        <form action="<?= site_url('save') ?>" method="POST" id="trial-value-form-save">
            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />


            <div class="d-grid gap-2 col-md-7 mx-md-auto py-2 ps-md-5">


                <div id="studyburden">
                <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button fs-18" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            General Information
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body" style="background-color:#d4f3fd;">
                            <p>This calculator is designed to help potential clinical research participants/ patients better understand and estimate the financial impact and burden of participation. <br />The goal is to minimize participants' economic burden and the risk to their financial well-being. Please complete all fields in the forms and click Submit to see the Results.</p>
                                <p>The forms should take between 10 to 15 minutes to complete. If you don’t know the answers to some of the questions, please ask the study support team, principal investigator or the patient advocate. To access additional features, (eg, print, save and download results), register to get an account.
                                </p>
                            <p>Contact us, if you have any questions or need advice or support.</p>
                            <p>We welcome your feedback and suggestions for improvement.</p>

                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed fs-18" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Terms and References
                            </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body" style="background-color:#d4f3fd;">
                                <p>This calculator is provided for informational and educational purpose only. The results are estimations only and should not be interpreted as advice or expectations for actual projects. Users agree that they are solely responsible for all their decisions with respect to its use. Neither RHIEOS Ventures/TrialValue nor its staff, directors, or affiliates are responsible for any damages or costs that may be incurred with respect to the use of this tool.</p>

                                <h6>References</h6>
                                <p>Bierer BE, White SA, Gelinas L, Strauss DH. Fair payment and just benefits to enhance diversity in clinical research. J Clin Transl Sci. 2021 Jul 14; 
                                   </p>
                                <p>Reimbursement and Allowances for Trial Participants Regulation (EU) No 536/2014 Approved Model by National Coordination Centre of Ethics Committees, Nov. 10th, 2022 - version n°3
                                <a style="word-wrap:break-word;" href="https://www.aifa.gov.it/documents/20142/1783350/Modello_Indennita_part_spese_sper_CCN_EN.pdf" target="_blank">https://www.aifa.gov.it/documents/20142/1783350/Modello_Indennita_part_spese_sper_CCN_EN.pdf</a>
                                    </>
                                <p>Larry Ajuwon, New Calculator Could Help Trial Participants And Sponsors Determine Costs And Fair Compensation, Clinical Leader article, December 14, 2023</p>
                            </div>
                            </div>
                        </div>
                        
                    </div>
                    <h2 class="py-2 fw-bold text-center position-relative mt-4" style="color:#34669b;">
                        STUDY BURDEN

                        <i class="bi bi-info-circle-fill fs-6 text-dark" data-toggle="tooltip" data-placement="bottom" title="This section collects key details on the therapeutic area, protocol, procedures and logistics."></i>

                        <!-- <i class="bi bi-info-circle-fill info fs-6 text-dark">
                            <div class="position-absolute">
                                <span id="hover5" style="display: none;" class="text-danger fs-6">
                                    This section collects key details on the therapeutic area, protocol, procedures and logistics.
                                </span>
                            </div>
                        </i> -->

                    </h2>
                   
                    
                </div>

            </div>


            <div class="row ps-2">

                <!-- general Info -->

                <div class="mt-5 col-lg-3  ps-3 ">
                    <div id="generaldiv">

                       
                    </div>


                </div>


                <div class="col-lg-7">


                    <div class="module-1-study-burden">
                        <div class="row rightBorderMobile" style="border:solid 1px #eaeaea;">
                        <div class="d-grid gap-2 col-md-10 mx-auto py-2 mt-4">

                            <h3 class="py-3 fw-bold bg-light ps-2 my-3" style="color:#2aa7b5; font-family: 'Roboto';">
                                Protocol information

                                <i class="bi bi-info-circle-fill fs-6 text-dark" data-toggle="tooltip" data-placement="bottom" title="Study details as described in the protocol, study design or experience"></i>

                                <!-- <i class="bi bi-info-circle-fill info fs-6 text-dark">
                                    <div class="position-absolute">
                                        <span id="hover6" style="display: none;" class="text-danger fs-6">
                                            Study details as described in the protocol, study design or experience
                                        </span>
                                    </div>
                                </i> -->


                            </h3>

                            <!-- <div class="">
                               <label for="exampleFormControlTextarea1 mb-0" class="form-label">general information</label>
                                <textarea class="form-control" id="General_Information" name="General_Information" rows="3"></textarea>
                                  </div> -->


                            <label class="form-check-label fw-bold">
                                Therapeutic Area
 <i class="bi bi-info-circle-fill fs-6 text-dark" data-toggle="tooltip" data-placement="bottom" title="Category of disease or condition that the treatment being studied belongs to"></i>

                            </label>

                            <select class="form-select" aria-label="Default select example" id="Therapeutic_Area" name="Therapeutic_Area">
                                <option selected disabled>
                                    Choose One </option>
                                <option value="Autoimmune">Autoimmune</option>
                                <option value="Cardiovascular">Cardiovascular</option>
                                <option value="Dermatology">Dermatology</option>
                                <option value="Endocrinology">Endocrinology</option>
                                <option value="Gastroenterology">Gastroenterology</option>
                                <option value="Genetic and Rare Diseases">Genetic
                                    and Rare Diseases</option>
                                <option value="Hematology">Hematology</option>
                                <option value="Hepatology">Hepatology</option>
                                <option value="Immunology">Immunology</option>
                                <option value="Infectious">Infectious</option>
                                <option value="Musculoskeletal">Musculoskeletal</option>
                                <option value="Nephrology">Nephrology</option>
                                <option value="Neurology">Neurology</option>
                                <option value="Nutrition and Weight Loss">Nutrition
                                    and Weight Loss</option>
                                <option value="Obstetrics/Gynecology (Women's Health)">Obstetrics/Gynecology
                                    (Women's Health)
                                </option>
                                <option value="Oncology">Oncology</option>
                                <option value="Ophthalmology">Ophthalmology</option>
                                <option value="Otolaryngology">Otolaryngology</option>
                                <option value="Pediatrics">Pediatrics</option>
                                <option value="Pulmonary/Respiratory">Pulmonary/Respiratory</option>
                                <option value="Rheumatology">Rheumatology</option>
                                <option value="Sleep">Sleep</option>
                                <option value="Trauma (incl. Surgery)">Trauma (incl.
                                    Surgery)</option>
                                <option value="Urology">Urology</option>
                            </select>

                        </div>

                        <div class="d-grid gap-2 col-md-10 mx-auto py-2 mt-4">
                            <label class="form-check-label  fw-bold">
                                Condition burden by therapeutic area
 <i class="bi bi-info-circle-fill fs-6 text-dark" data-toggle="tooltip" data-placement="bottom" title="How much the condition impacts participant's quality of life and well-being"></i>

                            </label>

                            <input type="radio" class="btn-check  btn-light border py-2" value="Low" name="condition_burden_by_therapeutic_area" id="gfg">
                            <label class="btn btn-outline-primary" for="gfg"> Low
                            </label>

                            <input type="radio" class="btn-check" value="Medium" name="condition_burden_by_therapeutic_area" id="gfg2">
                            <label class="btn btn-outline-primary" for="gfg2">
                                Medium
                            </label>

                            <input type="radio" class="btn-check" value="High" name="condition_burden_by_therapeutic_area" id="gfg3">
                            <label class="btn btn-outline-primary" for="gfg3"> High
                            </label>
                        </div>
                        <div class="d-grid gap-2 col-md-10 mx-auto py-2 mt-4">
                            <label class="form-check-label  fw-bold">
                                Study type
 <i class="bi bi-info-circle-fill fs-6 text-dark" data-toggle="tooltip" data-placement="bottom" title="Interventional means participants receive some kind of intervention, such as a new
 medicine in order to evaluate it.

Non-interventional means no additional intervention, treatment or procedures are
 given to participants"></i>

                            </label>
                            <div class="btn-group">
                                <input type="radio" class="btn-check" value="interventional" name="Study_type" id="interventional">
                                <label class="btn btn-outline-primary col-6" for="interventional"> Interventional </label>

                                <input type="radio" class="btn-check " value="Non interventional" name="Study_type" id="Non_interventional">
                                <label class="btn btn-outline-primary col-6" for="Non_interventional"> Non-Interventional
                                </label>
                            </div>
                        </div>
                        <div class="d-grid gap-2 col-md-10 mx-auto py-2 mt-4">

                            <label class="form-check-label  fw-bold">
                                Participant
 <i class="bi bi-info-circle-fill fs-6 text-dark" data-toggle="tooltip" data-placement="bottom" title="Are the participants healthy volunteers or patients that have the condition/disease being studied?"></i>

                            </label>
                            <div class="btn-group">
                                <input type="radio" class="btn-check" value="Healthy_volunteer" name="Participant" id="Healthy_volunteer">
                                <label class="btn btn-outline-primary col-6" for="Healthy_volunteer"> Healthy volunteer
                                </label>

                                <input type="radio" class="btn-check " value="Patient" name="Participant" id="petient">
                                <label class="btn btn-outline-primary col-6" for="petient">Patient
                                </label>
                            </div>
                        </div>
                        <div class="d-grid gap-2 col-md-10 mx-auto py-2 mt-4">
                            <label class="form-check-label  fw-bold">
                                Clinic visit frequency during treatment

                                <i class="bi bi-info-circle-fill fs-6 text-dark" data-toggle="tooltip" data-placement="bottom" title="How often would participants visit a hospital/clinic during the trial"></i>


                                <!-- <div class="btn info13 info">
                                    <i class="bi bi-info-circle-fill"></i>
                                    <span id="hover13" style="display: none;" class="text-danger">How often participant needs to attend clinic<br> in-person. The higher the frequency of visits the higher the burden.</span>
                                </div> -->

                            </label>
                            <input type="radio" class="btn-check" value="Weekly" name="Clinic_visit_frequency_during_treatment" id="Weekly">

                            <label class="btn btn-outline-primary" for="Weekly">
                                daily
                            </label>

                            <input type="radio" class="btn-check" value="Bi-weekly" name="Clinic_visit_frequency_during_treatment" id="Bi-weekly">
                            <label class="btn btn-outline-primary" for="Bi-weekly">
                                weekly </label>

                            <input type="radio" class="btn-check" value="Monthly" name="Clinic_visit_frequency_during_treatment" id="Monthly">
                            <label class="btn btn-outline-primary" for="Monthly">
                                Monthly </label>

                            <input type="radio" class="btn-check" value="Quartely" name="Clinic_visit_frequency_during_treatment" id="Quartely">
                            <label class="btn btn-outline-primary" for="Quartely">
                                Quarterly </label>
                        </div>

                        <div class="d-grid gap-2 col-md-10 mx-auto py-2 mt-4">

                            <label class="form-check-label  fw-bold">
                                Clinic visit frequency during Follow-up



 <i class="bi bi-info-circle-fill fs-6 text-dark" data-toggle="tooltip" data-placement="bottom" title="How often would participants visit the hospital/clinic during the follow-up phase"></i>

                            </label>
                            <input type="radio" class="btn-check" value="Weekly" name="Clinic_visit_frequency_during_follow_up" id="Weekly-1">
                            <label class="btn btn-outline-primary" for="Weekly-1">
                                daily </label>

                            <input type="radio" class="btn-check" value="Bi-weekly" name="Clinic_visit_frequency_during_follow_up" id="Bi-weekly-1">
                            <label class="btn btn-outline-primary" for="Bi-weekly-1">
                                weekly </label>

                            <input type="radio" class="btn-check" value="Monthly" name="Clinic_visit_frequency_during_follow_up" id="Monthly-1">
                            <label class="btn btn-outline-primary" for="Monthly-1">
                                Monthly </label>

                            <input type="radio" class="btn-check" value="Quartely" name="Clinic_visit_frequency_during_follow_up" id="Quartely-1">
                            <label class="btn btn-outline-primary" for="Quartely-1">
                                Quartely </label>
                        </div>

                        <div class="d-grid gap-2 col-md-10 mx-auto py-2 mt-4">

                            <div class="d-grid gap-2 col p-0">
                                <label for="customRange3" class="form-label  fw-bold"> Study
                                    duration

                                </label>

                                <input required type="range" class min="0" max="10" step="0.5" name="Study_duration" id="Study_duration" oninput="updateSlider(this.value, 10, 'num4', 'Year')" value="0">
                                <output id="num4" style="position: absolute; top: 50%; left: 0;">0
                                    Year</output>

                            </div>
                        </div>
                        <div class="d-grid gap-2 col-md-10 mx-auto py-2 mt-4">

                            <div class="d-grid gap-2 col p-0">
                                <label for="customRange4" class="form-label  fw-bold">Number
                                    of visits per study





 <i class="bi bi-info-circle-fill fs-6 text-dark" data-toggle="tooltip" data-placement="bottom" title=" Total number of scheduled clinic visits each participant is required to perform to complete the study according to the protocol"></i>
 


                                </label>
                                <input required type="range" class min="1" max="505" step="1" name="Number_of_visits_per_study" id="customRange4" oninput="updateSlider(this.value, 505, 'num3' ,'')" value="0">
                                <output id="num3" style="position: absolute; top: 50%; left: 0;">1</output>

                            </div>
                        </div>
                    </div>
                        <!-- Protocol information  Ends here. -->
                        <div class="row rightBorderMobile mt-3" style="border:solid 1px #eaeaea;">
                            <div class="d-grid gap-2 col-md-10 mx-auto py-2">

                                <h3 class="py-3 fw-bold bg-light ps-2 my-3" style="color:#2aa7b5; font-family: 'Roboto';">Procedures


                                    <i class="bi bi-info-circle-fill fs-6 text-dark" data-toggle="tooltip" data-placement="bottom" title="Study procedures to be followed, including all invasive procedures as described in the protocol.
                                            Physically invasive procedures are considered to have a higher burden."></i>

                                    <!-- <div class="btn info7 info"> <i class="bi bi-info-circle-fill"></i>
                                        <span id="hover7" style="display: none;" class="text-danger">Study procedures to be followed, including all <br>invasive procedures as described in the protocol.<br>
                                            Physically invasive procedures are considered to have a higher burden.</span>
                                    </div> -->


                                </h3>

                                <label class="form-check-label  fw-bold">
                                    Invasive procedures



    <i class="bi bi-info-circle-fill fs-6 text-dark" data-toggle="tooltip" data-placement="bottom" title="The type and frequency of procedures that participants need to undergo"></i>


                                </label>

                                <input required type="radio" class="btn-check" value="NoN-invasive" name="Invasive_procedures" id="NoN-invasive">
                                <label class="btn btn-outline-primary" for="NoN-invasive">Non-invasive
                                </label>

                                <input required type="radio" class="btn-check" value="One time invesive" name="Invasive_procedures" id="One time invesive-1">
                                <label class="btn btn-outline-primary" for="One time invesive-1"> One time invasive
                                </label>

                                <input required type="radio" class="btn-check" value="Repeat invasive" name="Invasive_procedures" id="Repeat invasive-1">
                                <label class="btn btn-outline-primary" for="Repeat invasive-1"> Repeat invasive </label>

                                <div class="d-grid gap-2 col p-0">
                                    <label for="customRange2" class="form-label  fw-bold">Hospitalisation
                                        & Overnight stay <i class="bi bi-info-circle-fill fs-6 text-dark" data-toggle="tooltip" data-placement="bottom" title="Total number of stays each participant will have during the study"></i></label>
                                        
                                
                                    <input required type="range" class min="0" max="10" step="1" name="Hospitalisation_AND_Overnight_stay" id="Hospitalisation_AND_Overnight_stay" oninput="updateSlider(this.value, 10, 'num2', '')" value="0">
                                    <output id="num2" style="position: absolute; top: 50%; left: 0;">0</output>

                                </div>
                            </div>
                            <div class="d-grid gap-2 col-md-10 mx-auto py-2 mt-4">

                                <label class="form-check-label  fw-bold">
                                    Questionnaire and Diary usage

                                    <i class="bi bi-info-circle-fill fs-6 text-dark" data-toggle="tooltip" data-placement="bottom" title=" How often will participants be required to complete health questionnaires or diaries? Daily or weekly = High; Monthly/quarterly = Medium"></i>

                                </label>

                                <input required type="radio" class="btn-check" value="No" name="Questionnaire_and_Diary_usage" id="No-invasive1">
                                <label class="btn btn-outline-primary" for="No-invasive1">No
                                </label>

                                <input required type="radio" class="btn-check" value="Medium" name="Questionnaire_and_Diary_usage" id="Medium-1">
                                <label class="btn btn-outline-primary" for="Medium-1">Medium
                                </label>

                                <input required type="radio" class="btn-check" value="High" name="Questionnaire_and_Diary_usage" id="High invasive-1">
                                <label class="btn btn-outline-primary" for="High invasive-1">
                                    High </label>
                            </div>
                            <div class="d-grid gap-2 col-md-10 mx-auto py-2 mt-4">

                                <div class="d-grid gap-2 col p-0">
                                    <label for="customRange3 " class="form-label  fw-bold">
                                        Average time spent in clinic per visit 
                                    
                                        <i class="bi bi-info-circle-fill fs-6 text-dark" data-toggle="tooltip" data-placement="bottom" title="How long a typical clinic visit is estimated to take"></i>

                                        </label>
                                    <input required type="range" class min="0" step="1" id="Average_time_spent_in_clinic_per_visit" name="Average_time_spent_in_clinic_per_visit" oninput="updateSlider(this.value, 100, 'num10', 'hours')" value="0">
                                    <output id="num10" style="position: absolute; top: 50%; left: 0;">0 hours</output>

                                </div>

                                <!-- <div class="input-group ">
                                <input required type="number"
                                    id="Average_time_spent_in_clinic_per_visit"
                                    class="form-control  "
                                    name="Average_time_spent_in_clinic_per_visit"
                                    value
                                    min="0"
                                    style="background-color:#f8f9fa;">

                                <div
                                    class="input-group-prepend position-absolute end-0 d-flex">
                                    <button type="button" class="btn btn-sm"
                                        id="Average_time_spent_in_clinic_per_visitminus-btn"><i
                                            class="fa fa-minus"></i></button>
                                    <button type="button" class="btn  btn-sm"
                                        id="Average_time_spent_in_clinic_per_visitplus-btn"><i
                                            class="fa fa-plus"></i></button>
                                </div>
                                
                            </div> -->

                            </div>

                            <div class="d-grid gap-2 col-md-10 mx-auto py-2 mt-4">
                                <label class="form-check-label  fw-bold">
                                    Long term follow-up visits
            
    <i class="bi bi-info-circle-fill fs-6 text-dark" data-toggle="tooltip" data-placement="bottom" title="If applicable, participants will have an option to continue receiving treatment or only have regular check ups"></i>

                                </label>

                                <input required type="radio" class="btn-check" value="Yes treatment option" name="Long_term_follow_up_visits" id="demo1">

                                <label class="btn btn-outline-primary" for="demo1">Treatment
                                    option
                                </label>

                                <input required type="radio" class="btn-check" value="check up" name="Long_term_follow_up_visits" id="demo2">

                                <label class="btn btn-outline-primary" for="demo2">Check
                                    up
                                </label>

                                <input required type="radio" class="btn-check" value="no" name="Long_term_follow_up_visits" id="demo3">

                                <label class="btn btn-outline-primary" for="demo3">No
                                </label>

                            </div>
                        </div>

                        <div class="row rightBorderMobile mt-3" style="border:solid 1px #eaeaea;">
                        <div class="d-grid gap-2 col-md-10 mx-auto py-2">
                            <h3 class="py-3 fw-bold bg-light ps-2 my-3" style="color:#2aa7b5; font-family: 'Roboto';">
                                Participant information


                                <i class="bi bi-info-circle-fill fs-6 text-dark" data-toggle="tooltip" data-placement="bottom" title="General details about age and logistics to  assess potential burden of participation"></i>

                                <!-- <div class="btn info8 info"> <i class="bi bi-info-circle-fill"></i>
                                    <span id="hover8" style="display: none;" class="text-danger">General details about age and logistics to <br> assess potential burden of participation</span>
                                </div> -->


                            </h3>

                            <label class="form-check-label  fw-bold">
                                Age
                            </label>

                            <input required type="radio" class="btn-check" value="0-12" name="Age" id="No-112584">
                            <label class="btn btn-outline-primary" for="No-112584">0-12
                            </label>

                            <input required type="radio" class="btn-check" value="13-18" name="Age" id="Age13-65">
                            <label class="btn btn-outline-primary" for="Age13-65">13-18
                            </label>

                            <input required type="radio" class="btn-check" value="18-65" name="Age" id="Age18-65">
                            <label class="btn btn-outline-primary" for="Age18-65">
                                18-65
                            </label>
                            <input required type="radio" class="btn-check" value="65+" name="Age" id="Age-65">
                            <label class="btn btn-outline-primary" for="Age-65"> 65+
                            </label>

                        </div>

                        <div class="d-grid gap-2 col-md-10 mx-auto py-2">

                            <label class="form-check-label  fw-bold">
                                Care giver or child care support required
                            </label>

                            <div class="btn-group">
                                <input required type="radio" class="btn-check" value="Yes" name="Care_giver_or_child_care_support_required" id="Care_giver_or_child_care_support_required_yes">
                                <label class="btn btn-outline-primary col-6" for="Care_giver_or_child_care_support_required_yes">
                                    Yes </label>

                                <input required type="radio" class="btn-check " value="No" name="Care_giver_or_child_care_support_required" id="Care_giver_or_child_care_support_required_no">
                                <label class="btn btn-outline-primary col-6" for="Care_giver_or_child_care_support_required_no">No
                                </label>
                            </div>

                        </div>

                        <div class="d-grid gap-2 col-md-10 mx-auto py-2 mb-4">

                            <label class="form-check-label  fw-bold">
                                Clinic visit travel distance, round trip
                            </label>
                            <input required type="radio" class="btn-check" value="<10KM" name="Clinic_visit_travel_distance_round_trip" id="Clinic_visit_travel_distance_round_trip10">
                            <label class="btn btn-outline-primary" for="Clinic_visit_travel_distance_round_trip10">&lt; 10 KM or 6 Miles

                            </label>

                            <input required type="radio" class="btn-check" value="10-30KM" name="Clinic_visit_travel_distance_round_trip" id="Clinic_visit_travel_distance_round_trip30">
                            <label class="btn btn-outline-primary" for="Clinic_visit_travel_distance_round_trip30">10-30 KM or 6-19 Miles

                            </label>

                            <input required type="radio" class="btn-check" value=">30KM" name="Clinic_visit_travel_distance_round_trip" id="Clinic_visit_travel_distance_round_trip-30">
                            <label class="btn btn-outline-primary" for="Clinic_visit_travel_distance_round_trip-30">
                                > 30 KM or 19 Miles                                </label>
                        </div>
                        <div class="input-group d-grid gap-2 col-md-10 mx-auto py-2 mb-4 px-0">
                            <!-- <input required type="number"
                                id="Average_travel_time_per_clinic_visit_round_trip"
                                name="Average_travel_time_per_clinic_visit_round_trip"
                                class="form-control  " value min="0"
                                style="background-color:#f8f9fa;">

                            <div
                                class="input-group-prepend position-absolute end-0 d-flex">
                                <button type="button" class="btn btn-sm"
                                    id="Average_travel_time_per_clinic_visit_round_tripminus-btn"><i
                                        class="fa fa-minus"></i></button>
                                <button type="button" class="btn  btn-sm"
                                    id="Average_travel_time_per_clinic_visit_round_tripplus-btn"><i
                                        class="fa fa-plus"></i></button>
                            </div> -->
                            <label class="form-check-label  fw-bold mb-4">
                                Average travel time per clinic visit, round trip
                            </label>
                            <input required type="range" class min="0" max="100" step="1" name="Average_travel_time_per_clinic_visit_round_trip" id="Average_travel_time_per_clinic_visit_round_trip" oninput="updateSlider(this.value, 100, 'num9', 'hours')" value="0">
                            <output id="num9" style="position: absolute; top: 50%; left: 0;">0
                                hours</output>
                        </div>
</div>
                        <div class="d-grid gap-2 col-md-10 mx-auto py-2 mb-5">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-between">
                                <button onclick="clearForm()" class="btn btn btn-outline-primary me-md-2" type="button">Clear</button>

                                <button class="btn btn btn-outline-primary me-md-2" onclick="NextButton()" type="button">Next</button>
                            </div>

                        </div>

                    </div>

                    <!-- Module 2  code  -->
                    <div class="module-2-cost-and-payment" style="display: none;">
                    <div class="row rightBorderMobile mt-3" style="border:solid 1px #eaeaea;">

                        <div class="d-grid gap-2 col-md-10 mx-auto py-2">
                            <h2 class="py-2 fw-bold mx-auto" style="color:#34669b;">
                                COST AND PAYMENT

                                <i class="bi bi-info-circle-fill fs-6 text-dark" data-toggle="tooltip" data-placement="bottom" title="This section collects key details on the financials aspects of participation"></i>


                                <!-- <div class="btn info9 info"> <i class="bi bi-info-circle-fill"></i>
                                    <span id="hover9" style="display: none;" class="text-danger">This section collects key details on the <br>financials aspects of participation</span>
                                </div> -->

                            </h2>

                            <div class="input-group ">
                                <input type="hidden" id="MODULE_2_COST_AND_PAYMENTS" class="form-control  " name="MODULE_2_COST_AND_PAYMENTS" value="0" min="0" style="background-color:#f8f9fa;">

                                <!-- <div class="input-group-prepend position-absolute end-0 d-flex">
                            <button type="button" class="btn btn-sm" id="MODULE_2_COST_AND_PAYMENTSminus-btn"><i class="fa fa-minus"></i></button>
                           <button type="button" class="btn  btn-sm" id="MODULE_2_COST_AND_PAYMENTSplus-btn"><i class="fa fa-plus"></i></button>
                               </div> -->
                            </div>
                            <h3 class="py-3 fw-bold bg-light ps-2 my-3" style="color:#2aa7b5; font-family: 'Roboto';">
                                Compensation method

                                <i class="bi bi-info-circle-fill fs-6 text-dark" data-toggle="tooltip" data-placement="bottom" 
								title="Stipend = agreed upon fixed sum that participants will receive for completing a certain step, eg, visit or procedure. &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Lost income = calculated earnings that will be lost because of participation in the trial.&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Reimbursement = amount reimbursed to participant for actual expenses incurred, eg, taxis, train, meals etc."
></i>


                                <!-- <div class="btn info10 info"> <i class="bi bi-info-circle-fill"></i>
                                    <span id="hover10" style="display: none;" class="text-danger">The three most common models used for <br> compensating participants</span>
                                </div> -->



                            </h3>
                            <select class="form-control" id="Compensation_method" multiple="multiple" style="width: 100%;" name="Compensation_method[]" required>
                                <option value="select_all">Select All</option> <!-- Custom Select All Option -->
                                <option value="Participation stipend">Participationstipend</option>
                                <option value="Lost income">Lost income</option>
                                <option value="Reimbursement"> Reimbursement</option>

                            </select>
                            

                        </div>

</div>
<div class="row rightBorderMobile mt-3" style="border:solid 1px #eaeaea;">

                        <div class="d-grid gap-2 col-md-10 mx-auto py-2">
                            <h3 class="py-3 fw-bold bg-light ps-2 my-3" style="color:#2aa7b5; font-family: 'Roboto';">Expense
                                amounts (USD)</h3>

                            <div class="input-group ">
                                <input required type="hidden" id="Expense_amounts_USD" value="0" class="form-control  " name="Expense_amounts_USD" min="0" style="background-color:#f8f9fa;">

                                <!-- <div
                            class="input-group-prepend position-absolute end-0 d-flex">
                            <button type="button" class="btn btn-sm"
                                id="Expense_amounts_USDminus-btn"><i
                                    class="fa fa-minus"></i></button>
                            <button type="button" class="btn  btn-sm"
                                id="Expense_amounts_USDplus-btn"><i
                                    class="fa fa-plus"></i></button>
                        </div> -->
                            </div>
                        </div>
                     <div class="d-grid gap-2 col-md-10 mx-auto py-2">
                            <div class="d-grid gap-2 col p-0">
                                <label for="customRange1" class="form-label  fw-bold">Travel
                                    +
                                    Accommodation per visit day
                                     <i class="bi bi-info-circle-fill fs-6 text-dark" data-toggle="tooltip" data-placement="bottom" title="Estimated cost for travel and hotel/lodging"></i>
                                </label>
                                <input required type="range" class min="0" max="300" step="1" name="Travel_accomodation" id="Travel_accomodation" oninput="updateSlider(this.value, 300, 'num', '')" value="0">
                                <output id="num" style="position: absolute; top: 50%; left: 0;">0</output>

                            </div>




                            <div class="d-grid gap-2 col p-0">
                                <label for="customRange5" class="form-label  fw-bold">Patient support expenses per visit day


 <i class="bi bi-info-circle-fill fs-6 text-dark" data-toggle="tooltip" data-placement="bottom" title="Includes any additional costs that the participant will incur because of the trial eg,external examinations, imaging, laboratory tests, home nurse and child care etc"></i>


                                </label>
                                <input required type="range" class min="0" max="750" step="1" name="Patient_support_expenses" id="Patient_support_expenses" oninput="updateSlider(this.value, 750, 'num1','')" value="0">
                                <output id="num1" style="position: absolute; top: 50%; left: 0;">0</output>

                            </div>

                        </div>
</div>
<div class="row rightBorderMobile mt-3" style="border:solid 1px #eaeaea;">

                        <div class="d-grid gap-2 col-md-10 mx-auto py-2">
                            <h3 class="py-3 fw-bold bg-light ps-2 my-3" style="color:#2aa7b5; font-family: 'Roboto';">Stipend
                                amounts (USD)

                                <i class="bi bi-info-circle-fill fs-6 text-dark" data-toggle="tooltip" data-placement="bottom" title="A fixed sum of money paid for the time and  effort of participation after completing a visit"></i>


                                <!-- <div class="btn info11 info"> <i class="bi bi-info-circle-fill"></i>
                                    <span id="hover11" style="display: none;" class="text-danger">A fixed sum of money paid for the time and <br> effort of participation after completing a visit</span>
                                </div> -->


                            </h3>

                            <div class="input-group ">
                                <!-- <input required type="hidden"
                                value="0"
                                id="Stipend_amounts_per_visit_USD"
                                class="form-control  "
                                name="Stipend_amounts_per_visit_USD" min="0"
                                style="background-color:#f8f9fa;"> -->

                                <!-- <div
                            class="input-group-prepend position-absolute end-0 d-flex">
                            <button class="btn btn-sm"
                                id="Stipend_amounts_per_visit_USDminus-btn"><i
                                    class="fa fa-minus"></i></button>
                            <button class="btn  btn-sm"
                                id="Stipend_amounts_per_visit_USDplus-btn"><i
                                    class="fa fa-plus"></i></button>
                        </div> -->
                            </div>

                            <label for class=" fw-bold">Per Visit</label>
                            <select class="form-select mb-3" id="Stipend_amounts_per_visit_USD_select" name="Stipend_amounts_per_visit_USD_select" aria-label=".form-select example">
                                <!-- <option   value="">Select</option> -->
                                <option selected value="Americas">Americas</option>
                                <option value="Europe">Europe</option>
                                <option value="Africa and Middle East">Africa and
                                    Middle East</option>

                                <option value="Asia Pac">Asia Pac</option>

                            </select>

                            <div class="d-grid gap-2 col p-0">
                                <label> </label>

                                <input required type="range" min="20" max="300" step="1" name="Stipend_amounts_per_visit_USD" id="Stipend_amounts_per_visit_USD" oninput="updateSlider(this.value, this.max, 'num8', '')" value="20">
                                <output id="num8" style="position: absolute; top: 20%; left: 0;">0</output>

                            </div>

                        </div>
                        </div>
                        <div class="row rightBorderMobile mt-3" style="border:solid 1px #eaeaea;">

                        <div class="d-grid gap-2 col-md-10 mx-auto py-2">
                            <h3 class="py-3 fw-bold bg-light ps-2 my-3" style="color:#2aa7b5; font-family: 'Roboto';">Minimum
                                and Mean Hourly Earning (PPP, ILO) USD

                                <i class="bi bi-info-circle-fill fs-6 text-dark" data-toggle="tooltip" data-placement="bottom" title="Region wage data sourced from International Labour Organization (ILO) database, converted using purchasing power parities (PPP $)"></i>

                                <!-- <div class="btn info12 info"> <i class="bi bi-info-circle-fill"></i>
                                    <span id="hover12" style="display: none;" class="text-danger">Region wage data sourced from International Labour <br>Organization (ILO) database, converted using purchasing power parities (PPP $)</span>
                                </div> -->


                            </h3>

                            <div class="input-group ">

                            </div>

                            <select class="form-select mb-3" id="Minimum_and_Mean_Hourly_Earning_PPP_ILO_USDSelect" aria-label=".form-select example" name="Minimum_and_Mean_Hourly_Earning_PPP_ILO_USDSelect">

                                <option selected value="Americas">Americas</option>
                                <option value="Europe">Europe</option>
                                <option value="Africa and Middle East">Africa and
                                    Middle East</option>

                                <option value="Asia Pac">Asia Pac</option>
                                <option value="World">World</option>

                            </select>

                            <select class="form-select mb-3" id="Minimum_and_Mean_Hourly_Earning_PPP_ILO_USD" name="Minimum_and_Mean_Hourly_Earning_PPP_ILO_USD" aria-label=".form-select example">
                                <option disabled selected>Choose</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                            </select>

                            <div class="d-grid gap-2 d-flex justify-content-between mb-5">
                                <button class="btn btn btn-outline-primary me-md-2" onclick="backButton()" type="button">Back</button>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>

                        </div>
                        </div>
                    </div>

                    <!-- Final Result Display  -->
                    <div class="final-result module-3-result-display " style="display: none; ">

                        <div class="shadow my-5 px-2 py-4">


                            <h2 class="py-2 fw-bold text-center" style="color:#34669b;">
                                RESULTS </h2>


                            <div class="d-grid  mx-auto p-0 mt-5">
                                <h3 class="py-3 fw-bold bg-light ps-2 my-3" style="color:#2aa7b5; font-family: 'Roboto';">Financial
                                    Impact and Burden Risk</h3>
                            </div>

                            <div class="d-grid  mx-auto p-0 border mt-3 ">
                                <div style="color:#2aa7b5; font-family: 'Roboto'; background-color: #a9c9dfe0;" class="m-0 p-0">
                                    <h3 class="ps-2 py-3">
                                        Estimated
                                        Compensation</h3>
                                </div>


                                <div class="row">
                                    <div class="col-9 my-3">
                                        <p class="ps-2"> Income </p>
                                        <p class="ps-2"> Stipend </p>
                                        <p style="color:#2aa7b5;" class="fs-5"> <span class="ps-2 fw-bold">Total</span></p>
                                    </div>

                                    <div class="col-3 text-center border-start py-3">
                                        <p id="Lost-income-amount" class="fw-bold"></p>
                                        <p id="Stipend-amount" class="fw-bold"></p>
                                        <p class="fs-5 fw-bold" id="total-Estimated-Compensation"> </p>
                                    </div>
                                </div>

                            </div>


                            <div class="d-grid  mx-auto p-0 border mt-3 ">
                                <div style="color:#2aa7b5; font-family: 'Roboto'; background-color: #a9c9dfe0;" class="m-0 p-0 border-bottom">
                                    <h3 class="ps-2 py-3">
                                        Estimated
                                        Reimbursement</h3>
                                </div>
                                <div class="row">
                                    <div class="col-9 my-3">
                                        <p class="ps-2"> Travel & accomodation expense </p>
                                        <p class="ps-2"> Patient support expense </p>
                                        <p style="color:#2aa7b5;" class="fs-5"> <span class="ps-2 fw-bold">Total</span></p>

                                    </div>
                                    <div class="col-3 text-center border-start py-3">
                                        <p id="accomodation-expens-amount" class="fw-bold"></p>
                                        <p id="Patient-support-expense" class="fw-bold"></p>
                                        <p id="total-Estimated-Reimbursement" class="fs-5 fw-bold"> </p>
                                    </div>
                                </div>

                            </div>

                            <div class=" mx-auto  p-0 d-flex text-white mt-4 ">

                                <div class="col-9 py-1 d-flex justify-content-start align-items-center" style="background-color:#0b7a87ba">
                                    <h5 class="fw-bold ps-2">Financial
                                        Impact

 <i class="bi bi-info-circle-fill fs-6 text-dark" data-toggle="tooltip" data-placement="bottom" title="The total cost of participation and completing the study which includes reimbursable expenses, stipend and compensation for lost income"></i>

                                        <!-- <div class="btn info3 info"> <i class="bi bi-info-circle-fill"></i>
                                            <span id="hover3" style="display: none;" class="text-danger">Estimated net financial impact based <br>on cost and payment inputs </span>
                                        </div> -->

                                    </h5>
                                </div>
                                <div class="col-3 text-center py-1 d-flex justify-content-center align-items-center bg-danger">
                                    <h5 id="Financial-Impact-total" class=" fw-bold "></h5>
                                </div>

                            </div>

                            <div class=" mx-auto  p-0 mb-4 d-flex text-white mt-4 ">

                                <div class="col-9 py-1 d-flex justify-content-start align-items-center" style="background-color:#0b7a87ba">
                                    <h5 class="fw-bold ps-2 m-0">Burden Impact
                                        (Financial Well-Being Risk)

                                        
 <i class="bi bi-info-circle-fill fs-6 text-dark" data-toggle="tooltip" data-placement="bottom" title=" Indicates the overall level of burden that the participant is likely to experience considering their condition and the logistical, financial, physical and mental demands related to the trial"></i>


                                        <!-- <div class="btn info4 info"> <i class="bi bi-info-circle-fill"></i>
                                            <span id="hover4" style="display: none;" class="text-danger"> Estimated participation burden level based<br> on TrialValue weighted scoring methodology.</span>
                                        </div> -->

                                    </h5>
                                </div>
                                <div class="col-3 text-center py-1 d-flex justify-content-center align-items-center bg-danger">
                                    <h5 id="Burden-Impact-risk" class="fw-bold "></h5>
                                </div>

                            </div>

                            <div class="d-grid gap-2  mx-auto py-2">

                                <div class="d-grid gap-2 d-md-flex justify-content-md-center  mb-5">
                                    <button class="btn  btn-outline-primary me-md-2" onclick="backButtonResult()" type="button">Back</button>

                                    <a href="<?= site_url() ?>" class="d-flex flex-column"><button class="btn  btn-outline-primary me-md-2" type="button">Home</button></a>
                                    <?php if(session()->get('user_data')){ ?>
                                        <a href="<?= site_url() ?>" target="_blank" class="d-flex flex-column downloadPdf"><button class="btn  btn-outline-primary me-md-2" type="button">Download</button></a>
                                    <?php } ?>

                                </div>
                            </div>

                        </div>

                    </div>



                </div>


            </div>
        </form>






    </div>

    <footer class="p-4 text-white text-center" style="background-color: #1b75ba;">
        <h4 style="font-size: 11px; font-family: Helvetica, Arial, sans-serif;">TrialValue Patient Financial Burden Calculator™ &copy; <?php echo date("Y",time()); ?>, TrialValueapp.com
</h4>
    </footer>

    <?php echo view('home/login-modal'); ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js" crossorigin="anonymous"></script>
    <script src="<?= site_url() ?>public/coustom.js"></script>


    <!-- select 2 jequery -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        function clearForm() {
            document.getElementById("trial-value-form-save").reset();

            var otpt = document.getElementsByTagName('output');


            for (let i = 0; i < otpt.length; i++) {

                document.getElementsByTagName('output')[i].innerText = " ";

            }



        }

        $('#Compensation_method').select2();

        $('#Compensation_method').on('select2:select', function(e) {
            if (e.params.data.id === 'select_all') {
                // If "Select All" is selected, select all other options except "Select All"
                $('#Compensation_method > option').each(function() {
                    console.log($(this).val()+"|select_all");
                    if ($(this).val() !== 'select_all') {
                        $(this).prop("selected", true);
                    }
                });
                $('#Compensation_method').trigger('change'); // Update select2 display
            }
        });

        // Handle the "Deselect All" scenario
        // $('#Compensation_method').on('select2:unselect', function(e) {
            
        //     if (e.params.data.id === 'select_all') {
        //         // If "Select All" is unselected, deselect all options
        //         $('#Compensation_method > option').prop("selected", false);
        //         $('#Compensation_method').trigger('change'); // Update select2 display
        //     }
        // });

        $(document).ready(function() {
            //  $('#Compensation_method').select2();
        });
    </script>


    <script>
        function backButtonResult() {
            $(".module-2-cost-and-payment").css("display", "block");
            $(".module-3-result-display").css("display", "none");
        }

        function backButton() {
            $(".module-1-study-burden").css("display", "block");
            $(".module-2-cost-and-payment").css("display", "none");
            $("#generaldiv").css("display", "block");
            $("#studyburden").css("display", "block");


        }

        function NextButton() {
            var t = nextValidation();


            if (t) {
                $(".module-1-study-burden").css("display", "none");
                $(".module-2-cost-and-payment").css("display", "block");
                $("#generaldiv").css("display", "none");
                $("#studyburden").css("display", "none");
                window.scrollTo(0, 0);

            }
        }

        function nextValidation() {

            if ($("input[name=condition_burden_by_therapeutic_area]:checked").val() == undefined) {
                toastr.error('please select condition burden by therapeutic area');
                return false
            }
            if ($("input[name=Study_type]:checked").val() == undefined) {
                toastr.error('please select Study type');
                return false
            }
            if ($("input[name=Participant]:checked").val() == undefined) {
                toastr.error('please select participant');
                return false
            }
            if ($("input[name=Clinic_visit_frequency_during_treatment]:checked").val() == undefined) {
                toastr.error('please select clinic visit frequency during treatment');
                return false
            }
            if ($("input[name=Clinic_visit_frequency_during_follow_up]:checked").val() == undefined) {
                toastr.error('please select clinic visit frequency during Follow-up');
                return false
            }
            if ($("input[name=Study_duration]").val() == undefined) {
                toastr.error('study duration field is required');
                return false
            }
            if ($("input[name=Number_of_visits_per_study]").val() == undefined) {
                toastr.error('number of visits per study field is required');
                return false
            }
            if ($("input[name=Invasive_procedures]:checked").val() == undefined) {
                toastr.error('please select invasive procedures');
                return false
            }
            if ($("input[name=Hospitalisation_AND_Overnight_stay]").val() == undefined) {
                toastr.error('hospitalisation & overnight stay field is required');
                return false
            }
            if ($("input[name=Questionnaire_and_Diary_usage]:checked").val() == undefined) {
                toastr.error('please select questionnaire and diary usage');
                return false
            }
            if ($("input[name=Average_time_spent_in_clinic_per_visit]").val() == undefined || $(
                    "input[name=Average_time_spent_in_clinic_per_visit]").val() == '') {
                toastr.error('average time spent in clinic per visit field is required');
                return false
            }
            if ($("input[name=Long_term_follow_up_visits]:checked").val() == undefined) {
                toastr.error('please select long term follow-up visits ');
                return false
            }
            if ($("input[name=Age]:checked").val() == undefined) {
                toastr.error('please select age');
                return false
            }
            if ($("input[name=Care_giver_or_child_care_support_required]:checked").val() == undefined) {
                toastr.error('please select care giver or child care support required');
                return false
            }
            if ($("input[name=Clinic_visit_travel_distance_round_trip]:checked").val() == undefined) {
                toastr.error('please select clinic visit travel distance, round trip');
                return false
            }
            if ($("input[name=Average_travel_time_per_clinic_visit_round_trip]").val() == undefined || $(
                    "input[name=Average_travel_time_per_clinic_visit_round_trip]").val() == '') {
                toastr.error('average travel time per clinic visit, round trip field is required');
                return false
            }
            return true
            // alert(val);
        }
        // Stipend amounts (USD)
        $('#Stipend_amounts_per_visit_USD_select').change(function() {

            if (this.value == "Americas") {
                $("#Stipend_amounts_per_visit_USD").attr({
                    "max": 300, // substitute your own
                    "min": 20 // values (or variables) here
                });
                $('#Stipend_amounts_per_visit_USD').val(20)
            }

            if (this.value == "Africa and Middle East") {
                $("#Stipend_amounts_per_visit_USD").attr({
                    "max": 100, // substitute your own
                    "min": 0 // values (or variables) here
                });
                $('#Stipend_amounts_per_visit_USD').val(0)
            }
            if (this.value == "Asia Pac") {
                $("#Stipend_amounts_per_visit_USD").attr({
                    "max": 300, // substitute your own
                    "min": 0 // values (or variables) here
                });
                $('#Stipend_amounts_per_visit_USD').val(0)
            }
            if (this.value == "Europe") {
                $("#Stipend_amounts_per_visit_USD").attr({
                    "max": 200, // substitute your own
                    "min": 20,
                    "value": 0 // values (or variables) here
                });
                $('#Stipend_amounts_per_visit_USD').val(20)
            }

            var output = document.getElementById("num8");
            output.style.left = 0 + '%';
            output.innerHTML = 0;



        });
        //Minimum and Mean Hourly Earning (PPP, ILO) USD

        $('#Minimum_and_Mean_Hourly_Earning_PPP_ILO_USDSelect').change(function() {
            var option = '';
            if (this.value == "Americas" || this.value == "Europe") {
                option =
                    '<option disabled selected>Choose</option><option value="20">20</option><option value="50">50</option>';
            }

            if (this.value == "Africa and Middle East") {
                option =
                    '<option disabled selected>Choose</option><option value="5">5</option><option value="20">20</option>';
            }
            if (this.value == "Asia Pac") {
                option =
                    '<option disabled selected>Choose</option><option value="15">15</option><option value="30">30</option>';
            }
            if (this.value == "World") {
                option =
                    '<option disabled selected>Choose</option><option value="10">10</option><option value="20">20</option>';
            }

            $("#Minimum_and_Mean_Hourly_Earning_PPP_ILO_USD").find('option').remove();
            $("#Minimum_and_Mean_Hourly_Earning_PPP_ILO_USD").append(option);

        })
    </script>
    <script>
        $(document).ready(function() {

            // Average_time_spent_in_clinic_per_visit 
            $('#Average_time_spent_in_clinic_per_visit').prop('disabled', false);
            $('#Average_time_spent_in_clinic_per_visitplus-btn').click(function() {
                var val = $('#Average_time_spent_in_clinic_per_visit').val();
                if (val == '') {
                    val = 0;

                }
                $('#Average_time_spent_in_clinic_per_visit').val(parseInt(val) + 1);
            });
            $('#Average_time_spent_in_clinic_per_visitminus-btn').click(function() {
                $('#Average_time_spent_in_clinic_per_visit').val(parseInt($(
                    '#Average_time_spent_in_clinic_per_visit').val()) - 1);
                if ($('#Average_time_spent_in_clinic_per_visit').val() == 0 || $(
                        '#Average_time_spent_in_clinic_per_visit').val() == -1) {
                    $('#Average_time_spent_in_clinic_per_visit').val(0);
                }

            }); // MODULE_2_COST_AND_PAYMENTS 
            $('#MODULE_2_COST_AND_PAYMENTS').prop('disabled', false);
            $('#MODULE_2_COST_AND_PAYMENTSplus-btn').click(function() {
                var val = $('#MODULE_2_COST_AND_PAYMENTS').val();
                if (val == '') {
                    val = 0;

                }
                $('#MODULE_2_COST_AND_PAYMENTS').val(parseInt(val) + 1);
            });
            $('#MODULE_2_COST_AND_PAYMENTSminus-btn').click(function() {
                $('#MODULE_2_COST_AND_PAYMENTS').val(parseInt($('#MODULE_2_COST_AND_PAYMENTS').val()) - 1);
                if ($('#MODULE_2_COST_AND_PAYMENTS').val() == 0 || $('#MODULE_2_COST_AND_PAYMENTS').val() ==
                    -1) {
                    $('#MODULE_2_COST_AND_PAYMENTS').val(0);
                }

            });
            // Average_travel_time_per_clinic_visit_round_trip 
            $('#Average_travel_time_per_clinic_visit_round_trip').prop('disabled', false);
            $('#Average_travel_time_per_clinic_visit_round_tripplus-btn').click(function() {
                var val = $('#Average_travel_time_per_clinic_visit_round_trip').val();
                if (val == '') {
                    val = 0;

                }
                $('#Average_travel_time_per_clinic_visit_round_trip').val(parseInt(val) + 1);
            });
            $('#Average_travel_time_per_clinic_visit_round_tripminus-btn').click(function() {
                $('#Average_travel_time_per_clinic_visit_round_trip').val(parseInt($(
                    '#Average_travel_time_per_clinic_visit_round_trip').val()) - 1);
                if ($('#Average_travel_time_per_clinic_visit_round_trip').val() == 0 || $(
                        '#Average_travel_time_per_clinic_visit_round_trip').val() == -1) {
                    $('#Average_travel_time_per_clinic_visit_round_trip').val(0);
                }

            });

            ;

            // Expense_amounts_USD
            $('#Expense_amounts_USD').prop('disabled', false);
            $('#Expense_amounts_USDplus-btn').click(function() {
                var val = $('#Expense_amounts_USD').val();
                if (val == '') {
                    val = 0;

                }
                $('#Expense_amounts_USD').val(parseInt(val) + 1);
            });
            $('#Expense_amounts_USDminus-btn').click(function() {
                $('#Expense_amounts_USD').val(parseInt($('#Expense_amounts_USD').val()) - 1);
                if ($('#Expense_amounts_USD').val() == 0 || $('#Expense_amounts_USD').val() == -1) {
                    $('#Expense_amounts_USD').val(0);
                }

            });
            // Stipend_amounts_per_visit_USD
            $('#Stipend_amounts_per_visit_USD').prop('disabled', false);
            $('#Stipend_amounts_per_visit_USDplus-btn').click(function() {
                var val = $('#Stipend_amounts_per_visit_USD').val();
                if (val == '') {
                    val = 0;

                }
                $('#Stipend_amounts_per_visit_USD').val(parseInt(val) + 1);
            });
            $('#Stipend_amounts_per_visit_USDminus-btn').click(function() {
                $('#Stipend_amounts_per_visit_USD').val(parseInt($('#Stipend_amounts_per_visit_USD')
                    .val()) - 1);
                if ($('#Stipend_amounts_per_visit_USD').val() == 0 || $('#Stipend_amounts_per_visit_USD')
                    .val() == -1) {
                    $('#Stipend_amounts_per_visit_USD').val(0);
                }

            });




        });



        function updateSlider(value, max, id, unit) {

            var per = (value / max) * 100
            var output = document.getElementById(id);
            output.style.left = per + '%';
            output.innerHTML = value + ' ' + unit;
        }


        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

        $(document).ready(function() {
            $(".info").mouseover(function() {
                var id = $(this).find("span").attr("id");
                console.log(typeof(id));
                $("#" + id).show();
            });
            $(".info").mouseout(function() {
                var id = $(this).find("span").attr("id");
                $("#" + id).hide();
            });
        });
    </script>

    <script>
        $("#trial-value-form-save").submit(function(e) {




            if ($("input[name=Travel_accomodation]").val() == undefined || $("input[name=Travel_accomodation]")
                .val() == '') {
                toastr.error('Travel + Accomodation field is required');
                return false
            }
            if ($("input[name=Patient_support_expenses]").val() == undefined || $(
                    "input[name=Patient_support_expenses]").val() == '') {
                toastr.error('Patient Support Expenses field is required');
                return false
            }



            var fd = new FormData(this);
            var obj = $(this),
                action = obj.attr('name');

            e.preventDefault();

            $.ajax({
                type: e.target.method,
                url: e.target.action,
                data: fd,
                contentType: false,
                processData: false,
                cache: false,
                success: function(data) {

                    var json_text = JSON.parse(data);

                    $(".downloadPdf").attr("href",'<?php echo base_url("pdf-download") ?>/'+json_text.id);
                    $("#Lost-income-amount").html(json_text.Lostincome);
                    $("#Stipend-amount").html(json_text.Stipend);
                    $("#total-Estimated-Compensation").html(json_text.EstimatedCompensationTotal);



                    $("#accomodation-expens-amount").html(json_text.Travelaccomodationexpense);
                    $("#Patient-support-expense").html(json_text.Patientsupportexpense);
                    $("#total-Estimated-Reimbursement").html(json_text
                        .EstimatedReimbursementTotal);
                    $("#Burden-Impact-risk").html(json_text.BurdenImpactRisk);
                    $("#Financial-Impact-total").html(json_text.FinancialImapact);
                    $(".module-2-cost-and-payment").css("display", "none");
                    $(".module-3-result-display").css("display", "block");
                    $("#generaldiv").css("display", "none");
                    $("#studyburden").css("display", "none");


                }
            });
        });
    </script>

    </script>
</body>

</html>