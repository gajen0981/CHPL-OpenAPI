<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Chpl */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chpl-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'STG_Certification_Certification_ID')->textInput(['maxlength' => 44]) ?>

    <?= $form->field($model, 'Certification_Edition_Year')->textInput() ?>

    <?= $form->field($model, 'Published')->checkbox() ?>

    <?= $form->field($model, 'ATCB_Certification_ID')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'Practice_Setting')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'Product_Classification')->textInput(['maxlength' => 12]) ?>

    <?= $form->field($model, 'Product')->textInput(['maxlength' => 249]) ?>

    <?= $form->field($model, 'Vendor')->textInput(['maxlength' => 93]) ?>

    <?= $form->field($model, 'Additional_Software')->textInput(['maxlength' => 303]) ?>

    <?= $form->field($model, 'Version')->textInput(['maxlength' => 78]) ?>

    <?= $form->field($model, 'Certification_Date')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, '170302a_Drugdrug_drugallergy')->checkbox() ?>

    <?= $form->field($model, '170302b_Drug_formulary_checks')->checkbox() ?>

    <?= $form->field($model, '170302c_Maintain_uptodate_prob')->checkbox() ?>

    <?= $form->field($model, '170302d_Maintain_active_med_list')->checkbox() ?>

    <?= $form->field($model, '170302e_Maintain_active_allergy_list')->checkbox() ?>

    <?= $form->field($model, '170302f_Record_and_Chart_Vital_Signs')->checkbox() ?>

    <?= $form->field($model, '170302f1_Record_and_Chart_Vital')->checkbox() ?>

    <?= $form->field($model, '170302f2_Calculate_BMI')->checkbox() ?>

    <?= $form->field($model, '170302f3_Plot_and_display_growth')->checkbox() ?>

    <?= $form->field($model, '170302g_Smoking_status')->checkbox() ?>

    <?= $form->field($model, '170302h_Incorporate_lab_test_results')->checkbox() ?>

    <?= $form->field($model, '170302i_Generate_patient_lists')->checkbox() ?>

    <?= $form->field($model, '170302j_Medication_Reconciliation')->checkbox() ?>

    <?= $form->field($model, '170302k_Submission_to_immun')->checkbox() ?>

    <?= $form->field($model, '170302l_Public_Health_Surveillance')->checkbox() ?>

    <?= $form->field($model, '170302m_Patient_Specific_Education')->checkbox() ?>

    <?= $form->field($model, '170302n_Automated_measure_calc')->checkbox() ?>

    <?= $form->field($model, '170302o_Access_Control')->checkbox() ?>

    <?= $form->field($model, '170302p_Emergency_Access')->checkbox() ?>

    <?= $form->field($model, '170302q_Automatic_logoff')->checkbox() ?>

    <?= $form->field($model, '170302r_Audit_Log')->checkbox() ?>

    <?= $form->field($model, '170302s_Integrity')->checkbox() ?>

    <?= $form->field($model, '170302t_Authentication')->checkbox() ?>

    <?= $form->field($model, '170302u_General_Encryption')->checkbox() ?>

    <?= $form->field($model, '170302v_Encryption_when_exchanging')->checkbox() ?>

    <?= $form->field($model, '170302w_Accounting_of_disclosures')->checkbox() ?>

    <?= $form->field($model, '170304a_Computerized_provider_OE')->checkbox() ?>

    <?= $form->field($model, '170304b_Electronic_Prescribing')->checkbox() ?>

    <?= $form->field($model, '170304c_Record_Demographics')->checkbox() ?>

    <?= $form->field($model, '170304d_Patient_Reminders')->checkbox() ?>

    <?= $form->field($model, '170304e_Clinical_Decision_Support')->checkbox() ?>

    <?= $form->field($model, '170304f_Electronic_Copy_of_Health')->checkbox() ?>

    <?= $form->field($model, '170304g_Timely_Access')->checkbox() ?>

    <?= $form->field($model, '170304h_Clinical_Summaries')->checkbox() ?>

    <?= $form->field($model, '170304i_Exchange_Clinical_Info')->checkbox() ?>

    <?= $form->field($model, '170304j_Calculate_and_Submit_Clinical')->checkbox() ?>

    <?= $form->field($model, '170306a_Computerized_Provider_OE')->checkbox() ?>

    <?= $form->field($model, '170306b_Record_Demographics')->checkbox() ?>

    <?= $form->field($model, '170306c_Clinical_Decision_Support')->checkbox() ?>

    <?= $form->field($model, '170306d_Electronic_copy_of_Health_Inf')->checkbox() ?>

    <?= $form->field($model, '170306d1_Electronic_copy_of_health')->checkbox() ?>

    <?= $form->field($model, '170306d2_Ecopy_of_health_info')->checkbox() ?>

    <?= $form->field($model, '170306e_Electronic_copy_of_discharge')->checkbox() ?>

    <?= $form->field($model, '170306f_Exchange_Clinical_Info')->checkbox() ?>

    <?= $form->field($model, '170306g_Reportable_Lab_Results')->checkbox() ?>

    <?= $form->field($model, '170306h_Advance_Directives')->checkbox() ?>

    <?= $form->field($model, '170306i_Calculate_and_Submit_Clinical')->checkbox() ?>

    <?= $form->field($model, 'NQF_0001A_Asthma_Assessment')->checkbox() ?>

    <?= $form->field($model, 'NQF_0002A_Pharyngitis_Testing')->checkbox() ?>

    <?= $form->field($model, 'NQF_0004A_Alcohol_and_Other_Drug_Depe')->checkbox() ?>

    <?= $form->field($model, 'NQF_0012A_Prenatal_Care_HIV')->checkbox() ?>

    <?= $form->field($model, 'NQF_0013A_Hypertension_Blood_Pressure')->checkbox() ?>

    <?= $form->field($model, 'NQF_0014A_Prenatal_Care_Immune_Globul')->checkbox() ?>

    <?= $form->field($model, 'NQF_0018A_Controlling_High_Blood_Pres')->checkbox() ?>

    <?= $form->field($model, 'NQF_0024A_Weight_Assessment_for_Child')->checkbox() ?>

    <?= $form->field($model, 'NQF_0027A_Smoking_and_Tobacco_Use')->checkbox() ?>

    <?= $form->field($model, 'NQF_0028A_Preventive_Care_Screening')->checkbox() ?>

    <?= $form->field($model, 'NQF_0031A_Breast_Cancer_Screening')->checkbox() ?>

    <?= $form->field($model, 'NQF_0032A_Cervical_Cancer_Screening')->checkbox() ?>

    <?= $form->field($model, 'NQF_0033A_Chlamydia_Screening_for_Wome')->checkbox() ?>

    <?= $form->field($model, 'NQF_0034A_Colorectal_Cancer_Screening')->checkbox() ?>

    <?= $form->field($model, 'NQF_0036A_Use_of_Medication_for_Asthma')->checkbox() ?>

    <?= $form->field($model, 'NQF_0038A_Child_Immunization_Status')->checkbox() ?>

    <?= $form->field($model, 'NQF_0041A_Preventive_Care_Screening')->checkbox() ?>

    <?= $form->field($model, 'NQF_0043A_Pneomonia_Vaccination_Status')->checkbox() ?>

    <?= $form->field($model, 'NQF_0047A_Asthma_Pharmacologic_Therapy')->checkbox() ?>

    <?= $form->field($model, 'NQF_0052A_Low_Back_Pain_Imaging')->checkbox() ?>

    <?= $form->field($model, 'NQF_0055A_Diabetes_Eye_Exam')->checkbox() ?>

    <?= $form->field($model, 'NQF_0056A_Diabetes_Foot_Exam')->checkbox() ?>

    <?= $form->field($model, 'NQF_0059A_Diabetes_Hemoglobin_A1c')->checkbox() ?>

    <?= $form->field($model, 'NQF_0061A_Diabetes_BP_Management')->checkbox() ?>

    <?= $form->field($model, 'NQF_0062A_Diabates_Urine_Screening')->checkbox() ?>

    <?= $form->field($model, 'NQF_0064A_Diabetes_LDL')->checkbox() ?>

    <?= $form->field($model, 'NQF_0067A_Coronary_Artery_Disease')->checkbox() ?>

    <?= $form->field($model, 'NQF_0068A_Vascular_Disease_Aspirin')->checkbox() ?>

    <?= $form->field($model, 'NQF_0070A_CAD_BetaBlocker_Therapy')->checkbox() ?>

    <?= $form->field($model, 'NQF_0073A_Vascular_Disease_BP_Mgmt')->checkbox() ?>

    <?= $form->field($model, 'NQF_0074A_Coronary_Artery_Disease')->checkbox() ?>

    <?= $form->field($model, 'NQF_0075A_Vascular_Disease_LDL')->checkbox() ?>

    <?= $form->field($model, 'NQF_0081A_Heart_Failure_ACE_Inhibitor')->checkbox() ?>

    <?= $form->field($model, 'NQF_0083A_Heart_Failure_LVSD_Therapy')->checkbox() ?>

    <?= $form->field($model, 'NQF_0084A_Heart_Failure_Warfarin')->checkbox() ?>

    <?= $form->field($model, 'NQF_0086A_Primary_Open_Angle_Glaucoma')->checkbox() ?>

    <?= $form->field($model, 'NQF_0088A_Diabetic_Retinopathy_Docs')->checkbox() ?>

    <?= $form->field($model, 'NQF_0089A_Diabetic_Retinopathy_Com')->checkbox() ?>

    <?= $form->field($model, 'NQF_0105A_Antidepressant_Med_Mgmt')->checkbox() ?>

    <?= $form->field($model, 'NQF_0371I_VTE_Prophylaxis')->checkbox() ?>

    <?= $form->field($model, 'NQF_0372I_VTE_Intensive_Care_Unit')->checkbox() ?>

    <?= $form->field($model, 'NQF_0373I_VTE_Anticoagulation_Overlap')->checkbox() ?>

    <?= $form->field($model, 'NQF_0374I_VTE_Platelet_Monitoring')->checkbox() ?>

    <?= $form->field($model, 'NQF_0375I_VTE_Discharge_Instructions')->checkbox() ?>

    <?= $form->field($model, 'NQF_0376I_VTE_Incidence_of_Preventabl')->checkbox() ?>

    <?= $form->field($model, 'NQF_0385A_Oncology_Colon_Cancer')->checkbox() ?>

    <?= $form->field($model, 'NQF_0387A_Oncology_Brest_Cancer')->checkbox() ?>

    <?= $form->field($model, 'NQF_0389A_Prostate_Cancer_Bone_Scan')->checkbox() ?>

    <?= $form->field($model, 'NQF_0421A_Adult_Weight_Screening')->checkbox() ?>

    <?= $form->field($model, 'NQF_0435I_Stroke_Discharge')->checkbox() ?>

    <?= $form->field($model, 'NQF_0436I_Stroke_Anticoagulation')->checkbox() ?>

    <?= $form->field($model, 'NQF_0437I_Stroke_Thrombolytic')->checkbox() ?>

    <?= $form->field($model, 'NQF_0438I_Stroke_IschemicHemorrhagic')->checkbox() ?>

    <?= $form->field($model, 'NQF_0439I_Stroke_Discharge_on_Statins')->checkbox() ?>

    <?= $form->field($model, 'NQF_0440I_Stroke_Stroke_Education')->checkbox() ?>

    <?= $form->field($model, 'NQF_0441I_Stroke_Rehabilitation')->checkbox() ?>

    <?= $form->field($model, 'NQF_0495I_ED_Median_Time')->checkbox() ?>

    <?= $form->field($model, 'NQF_0497I_ED_Admission_Decision')->checkbox() ?>

    <?= $form->field($model, 'NQF_0575A_Diabetes_Hemoglobin_A1c')->checkbox() ?>

    <?= $form->field($model, '170314a1_Computerized_provider_OE')->checkbox() ?>

    <?= $form->field($model, '170314a2_Drugdrug_drugallergy')->checkbox() ?>

    <?= $form->field($model, '170314a3_Demographics')->checkbox() ?>

    <?= $form->field($model, '170314a4_Vital_signs_body_mass_ind')->checkbox() ?>

    <?= $form->field($model, '170314a5_Problem_List')->checkbox() ?>

    <?= $form->field($model, '170314a6_Medication_List')->checkbox() ?>

    <?= $form->field($model, '170314a7_Medication_Allergy_List')->checkbox() ?>

    <?= $form->field($model, '170314a8_Clinical_Decision_Support')->checkbox() ?>

    <?= $form->field($model, '170314a9_Electronic_Notes')->checkbox() ?>

    <?= $form->field($model, '170314a10_DrugFormulary_Checks')->checkbox() ?>

    <?= $form->field($model, '170314a11_Smoking_Status')->checkbox() ?>

    <?= $form->field($model, '170314a12_Image_Results')->checkbox() ?>

    <?= $form->field($model, '170314a13_Family_Health_History')->checkbox() ?>

    <?= $form->field($model, '170314a14_Patient_List_Creation')->checkbox() ?>

    <?= $form->field($model, '170314a15_PatientSpecific_Educatio')->checkbox() ?>

    <?= $form->field($model, '170314a16_Electronic_Medication_Adm')->checkbox() ?>

    <?= $form->field($model, '170314a17_Advance_Directives')->checkbox() ?>

    <?= $form->field($model, '170314b1_Transitions_of_Care_rece')->checkbox() ?>

    <?= $form->field($model, '170314b2_Transitions_of_Care_crea')->checkbox() ?>

    <?= $form->field($model, '170314b3_Electronic_Prescribing')->checkbox() ?>

    <?= $form->field($model, '170314b4_Clinical_Information_Recon')->checkbox() ?>

    <?= $form->field($model, '170314b5_Incorporate_Laboratory_Tes')->checkbox() ?>

    <?= $form->field($model, '170314b6_Transmission_of_Electronic')->checkbox() ?>

    <?= $form->field($model, '170314b7_Data_Portability')->checkbox() ?>

    <?= $form->field($model, '170314c1_Clinical_Quality_Measures')->checkbox() ?>

    <?= $form->field($model, '170314c2_Clinical_Quality_Measures')->checkbox() ?>

    <?= $form->field($model, '170314c3_Clinical_Quality_Measures')->checkbox() ?>

    <?= $form->field($model, '170314d1_Authentication_access_con')->checkbox() ?>

    <?= $form->field($model, '170314d2_Auditable_Events_and_Tampe')->checkbox() ?>

    <?= $form->field($model, '170314d3_Audit_Reports')->checkbox() ?>

    <?= $form->field($model, '170314d4_Amendments')->checkbox() ?>

    <?= $form->field($model, '170314d5_Automatic_logoff')->checkbox() ?>

    <?= $form->field($model, '170314d6_Emergency_access')->checkbox() ?>

    <?= $form->field($model, '170314d7_EndUser_Device_Encryption')->checkbox() ?>

    <?= $form->field($model, '170314d8_Integrity')->checkbox() ?>

    <?= $form->field($model, '170314d9_Accounting_of_Disclosures')->checkbox() ?>

    <?= $form->field($model, 'GGG_170314e1_View_Download_and_Transm')->checkbox() ?>

    <?= $form->field($model, 'GGG_170314e2_Clinical_Summary')->checkbox() ?>

    <?= $form->field($model, 'GGG_170314e3_Secure_Messaging')->checkbox() ?>

    <?= $form->field($model, '170314f1_Immunization_Information')->checkbox() ?>

    <?= $form->field($model, '170314f2_Transmission_to_Immunizati')->checkbox() ?>

    <?= $form->field($model, '170314f3_Transmission_to_Public_Hea')->checkbox() ?>

    <?= $form->field($model, '170314f4_Transmission_of_Reportable')->checkbox() ?>

    <?= $form->field($model, '170314f5_Cancer_Case_Information')->checkbox() ?>

    <?= $form->field($model, '170314f6_Transmission_to_Cancer_Reg')->checkbox() ?>

    <?= $form->field($model, '170314g1_Automated_Numerator_Record')->checkbox() ?>

    <?= $form->field($model, '170314g2_Automated_Measure_Calculat')->checkbox() ?>

    <?= $form->field($model, '170314g3_SafetyEnhanced_Design')->checkbox() ?>

    <?= $form->field($model, '170314g4_Quality_Management_System')->checkbox() ?>

    <?= $form->field($model, 'CMS100_AMI_2_Aspirin_Prescribed_at_Dis')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS102_Stroke_10_Ischemic_or_hemorrhag')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS104_Stroke_2_Ischemic_stroke_Dis')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS105_Stroke_6_Ischemic_stroke_Disc')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS107_Stroke_8_Ischemic_or_hemorrhagi')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS108_Venous_Thromboembolism_VTE_1')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS109_VTE_4_VTE_Patients_Receiving_Un')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS110_VTE_5_VTE_discharge_instruction')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS111_ED_2_Emergency_Department_Throu')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS113_PC_01_Elective_Delivery_Prior_t')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS114_VTE_6_Incidence_of_potentially')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS117_Childhood_Immunization_Status')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS122_Diabetes_Hemoglobin_A1c_Poor')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS123_Diabetes_Foot_Exam')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS124_Cervical_Cancer_Screening')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS125_Breast_Cancer_Screening')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS126_Use_of_Appropriate_Medications')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS127_Pneumonia_Vaccination_Status_fo')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS128_Anti_depressant_Medication_Mana')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS129_Prostate_Cancer_Avoidance_of')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS130_Colorectal_Cancer_Screening')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS131_Diabetes_Eye_Exam')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS132_Cataracts_Complications_withi')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS133_Cataracts_2040_or_Better_Vis')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS134_Diabetes_Urine_Protein_Screen')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS135_Heart_Failure_HF_Angiotensi')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS136_ADHD_Follow_Up_Care_for_Child')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS137_Initiation_and_Engagement_of_Al')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS138_Preventive_Care_and_Screening')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS139_Screening_for_Future_Fall_Risk')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS140_Breast_Cancer_Hormonal_Therapy')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS141_Colon_Cancer_Chemotherapy_for')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS142_Diabetic_Retinopathy_Communic')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS143_Primary_Open_Angle_Glaucoma_PO')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS144_Heart_Failure_HF_Beta_Block')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS145_Coronary_Artery_Disease_CAD')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS146_Appropriate_Testing_for_Childre')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS147_Preventative_Care_and_Screening')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS148_Hemoglobin_A1c_Test_for_Pediatr')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS149_Dementia_Cognitive_Assessment')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS153_Chlamydia_Screening_for_Women')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS154_Appropriate_Treatment_for_Child')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS155_Weight_Assessment_and_Counselin')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS156_Use_of_High_Risk_Medications_in')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS157_Oncology_Medical_and_Radiatio')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS158_Pregnant_women_that_had_HBsAg_t')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS159_Depression_Remission_at_Twelve')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS160_Depression_Utilization_of_the_P')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS161_Major_Depressive_Disorder_MDD')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS163_Diabetes_Low_Density_Lipoprot')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS164_Ischemic_Vascular_Disease_IVD')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS165_Controlling_High_Blood_Pressure')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS166_Use_of_Imaging_Studies_for_Low')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS167_Diabetic_Retinopathy_Document')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS169_Bipolar_Disorder_and_Major_Depr')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS171_SCIP_INF_1_Prophylactic_Antibio')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS172_SCIP_INF_2_Prophylactic_Antibio')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS177_Child_and_Adolescent_Major_Depr')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS178_SCIP_INF_9_Urinary_catheter_re')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS179_ADE_Prevention_and_Monitoring')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS182_Ischemic_Vascular_Disease_IVD')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS185_Healthy_Term_Newborn')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS188_PN_6_Initial_Antibiotic_Select')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS190_VTE_2_Intensive_Care_Unit_ICU')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS22_Preventive_Care_and_Screening')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS26V1_Home_Management_Plan_of_Care_H')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS2_Preventive_Care_and_Screening_S')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS30_AMI_10_Statin_Prescribed_at_Disc')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS31_EHDI_1a_Hearing_screening_prio')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS32_ED_3_Median_time_from_ED_arrival')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS50_Closing_the_referral_loop_rece')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS52_HIVAIDS_Pneumocystis_jiroveci')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS53_AMI_8a_Primary_PCI_Received_Wit')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS55_Emergency_Department_ED_1_Emer')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS56_Functional_status_assessment_for')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS60_AMI_7a_Fibrinolytic_Therapy_Rec')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS61_Preventive_Care_and_Screening')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS62_HIVAIDS_Medical_Visit')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS64_Preventive_Care_and_Screening')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS65_Hypertension_Improvement_in_bl')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS66_Functional_status_assessment_for')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS68_Documentation_of_Current_Medicat')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS69_Preventive_Care_and_Screening_B')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS71_Stroke_3_Ischemic_stroke_Antic')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS72_Stroke_5_Ischemic_stroke_Antit')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS73_VTE_3_VTE_Patients_with_Anticoag')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS74_Primary_Caries_Prevention_Interv')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS75_Children_who_have_dental_decay_o')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS77_HIVAIDS_RNA_control_for_Patie')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS82_Maternal_depression_screening')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'CMS90_Functional_status_assessment_for')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS91_Stroke_4_Ischemic_stroke_Throm')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'CMS9V1_Exclusive_Breast_Milk_Feeding')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'Certifying_ATCB')->textInput(['maxlength' => 19]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
