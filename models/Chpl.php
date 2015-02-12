<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chpl".
 *
 * @property string $STG_Certification_Certification_ID
 * @property integer $Certification_Edition_Year
 * @property boolean $Published
 * @property string $ATCB_Certification_ID
 * @property string $Practice_Setting
 * @property string $Product_Classification
 * @property string $Product
 * @property string $Vendor
 * @property string $Additional_Software
 * @property string $Version
 * @property string $Certification_Date
 * @property boolean $__170302a_Drugdrug_drugallergy
 * @property boolean $_170302b_Drug_formulary_checks
 * @property boolean $_170302c_Maintain_uptodate_prob
 * @property boolean $_170302d_Maintain_active_med_list
 * @property boolean $_170302e_Maintain_active_allergy_list
 * @property boolean $_170302f_Record_and_Chart_Vital_Signs
 * @property boolean $_170302f1_Record_and_Chart_Vital
 * @property boolean $_170302f2_Calculate_BMI
 * @property boolean $_170302f3_Plot_and_display_growth
 * @property boolean $_170302g_Smoking_status
 * @property boolean $_170302h_Incorporate_lab_test_results
 * @property boolean $_170302i_Generate_patient_lists
 * @property boolean $_170302j_Medication_Reconciliation
 * @property boolean $_170302k_Submission_to_immun
 * @property boolean $_170302l_Public_Health_Surveillance
 * @property boolean $_170302m_Patient_Specific_Education
 * @property boolean $_170302n_Automated_measure_calc
 * @property boolean $_170302o_Access_Control
 * @property boolean $_170302p_Emergency_Access
 * @property boolean $_170302q_Automatic_logoff
 * @property boolean $_170302r_Audit_Log
 * @property boolean $_170302s_Integrity
 * @property boolean $_170302t_Authentication
 * @property boolean $_170302u_General_Encryption
 * @property boolean $_170302v_Encryption_when_exchanging
 * @property boolean $_170302w_Accounting_of_disclosures
 * @property boolean $_170304a_Computerized_provider_OE
 * @property boolean $_170304b_Electronic_Prescribing
 * @property boolean $_170304c_Record_Demographics
 * @property boolean $_170304d_Patient_Reminders
 * @property boolean $_170304e_Clinical_Decision_Support
 * @property boolean $_170304f_Electronic_Copy_of_Health
 * @property boolean $_170304g_Timely_Access
 * @property boolean $_170304h_Clinical_Summaries
 * @property boolean $_170304i_Exchange_Clinical_Info
 * @property boolean $_170304j_Calculate_and_Submit_Clinical
 * @property boolean $_170306a_Computerized_Provider_OE
 * @property boolean $_170306b_Record_Demographics
 * @property boolean $_170306c_Clinical_Decision_Support
 * @property boolean $_170306d_Electronic_copy_of_Health_Inf
 * @property boolean $_170306d1_Electronic_copy_of_health
 * @property boolean $_170306d2_Ecopy_of_health_info
 * @property boolean $_170306e_Electronic_copy_of_discharge
 * @property boolean $_170306f_Exchange_Clinical_Info
 * @property boolean $_170306g_Reportable_Lab_Results
 * @property boolean $_170306h_Advance_Directives
 * @property boolean $_170306i_Calculate_and_Submit_Clinical
 * @property boolean $NQF_0001A_Asthma_Assessment
 * @property boolean $NQF_0002A_Pharyngitis_Testing
 * @property boolean $NQF_0004A_Alcohol_and_Other_Drug_Depe
 * @property boolean $NQF_0012A_Prenatal_Care_HIV
 * @property boolean $NQF_0013A_Hypertension_Blood_Pressure
 * @property boolean $NQF_0014A_Prenatal_Care_Immune_Globul
 * @property boolean $NQF_0018A_Controlling_High_Blood_Pres
 * @property boolean $NQF_0024A_Weight_Assessment_for_Child
 * @property boolean $NQF_0027A_Smoking_and_Tobacco_Use
 * @property boolean $NQF_0028A_Preventive_Care_Screening
 * @property boolean $NQF_0031A_Breast_Cancer_Screening
 * @property boolean $NQF_0032A_Cervical_Cancer_Screening
 * @property boolean $NQF_0033A_Chlamydia_Screening_for_Wome
 * @property boolean $NQF_0034A_Colorectal_Cancer_Screening
 * @property boolean $NQF_0036A_Use_of_Medication_for_Asthma
 * @property boolean $NQF_0038A_Child_Immunization_Status
 * @property boolean $NQF_0041A_Preventive_Care_Screening
 * @property boolean $NQF_0043A_Pneomonia_Vaccination_Status
 * @property boolean $NQF_0047A_Asthma_Pharmacologic_Therapy
 * @property boolean $NQF_0052A_Low_Back_Pain_Imaging
 * @property boolean $NQF_0055A_Diabetes_Eye_Exam
 * @property boolean $NQF_0056A_Diabetes_Foot_Exam
 * @property boolean $NQF_0059A_Diabetes_Hemoglobin_A1c
 * @property boolean $NQF_0061A_Diabetes_BP_Management
 * @property boolean $NQF_0062A_Diabates_Urine_Screening
 * @property boolean $NQF_0064A_Diabetes_LDL
 * @property boolean $NQF_0067A_Coronary_Artery_Disease
 * @property boolean $NQF_0068A_Vascular_Disease_Aspirin
 * @property boolean $NQF_0070A_CAD_BetaBlocker_Therapy
 * @property boolean $NQF_0073A_Vascular_Disease_BP_Mgmt
 * @property boolean $NQF_0074A_Coronary_Artery_Disease
 * @property boolean $NQF_0075A_Vascular_Disease_LDL
 * @property boolean $NQF_0081A_Heart_Failure_ACE_Inhibitor
 * @property boolean $NQF_0083A_Heart_Failure_LVSD_Therapy
 * @property boolean $NQF_0084A_Heart_Failure_Warfarin
 * @property boolean $NQF_0086A_Primary_Open_Angle_Glaucoma
 * @property boolean $NQF_0088A_Diabetic_Retinopathy_Docs
 * @property boolean $NQF_0089A_Diabetic_Retinopathy_Com
 * @property boolean $NQF_0105A_Antidepressant_Med_Mgmt
 * @property boolean $NQF_0371I_VTE_Prophylaxis
 * @property boolean $NQF_0372I_VTE_Intensive_Care_Unit
 * @property boolean $NQF_0373I_VTE_Anticoagulation_Overlap
 * @property boolean $NQF_0374I_VTE_Platelet_Monitoring
 * @property boolean $NQF_0375I_VTE_Discharge_Instructions
 * @property boolean $NQF_0376I_VTE_Incidence_of_Preventabl
 * @property boolean $NQF_0385A_Oncology_Colon_Cancer
 * @property boolean $NQF_0387A_Oncology_Brest_Cancer
 * @property boolean $NQF_0389A_Prostate_Cancer_Bone_Scan
 * @property boolean $NQF_0421A_Adult_Weight_Screening
 * @property boolean $NQF_0435I_Stroke_Discharge
 * @property boolean $NQF_0436I_Stroke_Anticoagulation
 * @property boolean $NQF_0437I_Stroke_Thrombolytic
 * @property boolean $NQF_0438I_Stroke_IschemicHemorrhagic
 * @property boolean $NQF_0439I_Stroke_Discharge_on_Statins
 * @property boolean $NQF_0440I_Stroke_Stroke_Education
 * @property boolean $NQF_0441I_Stroke_Rehabilitation
 * @property boolean $NQF_0495I_ED_Median_Time
 * @property boolean $NQF_0497I_ED_Admission_Decision
 * @property boolean $NQF_0575A_Diabetes_Hemoglobin_A1c
 * @property boolean $_170314a1_Computerized_provider_OE
 * @property boolean $_170314a2_Drugdrug_drugallergy
 * @property boolean $_170314a3_Demographics
 * @property boolean $_170314a4_Vital_signs_body_mass_ind
 * @property boolean $_170314a5_Problem_List
 * @property boolean $_170314a6_Medication_List
 * @property boolean $_170314a7_Medication_Allergy_List
 * @property boolean $_170314a8_Clinical_Decision_Support
 * @property boolean $_170314a9_Electronic_Notes
 * @property boolean $_170314a10_DrugFormulary_Checks
 * @property boolean $_170314a11_Smoking_Status
 * @property boolean $_170314a12_Image_Results
 * @property boolean $_170314a13_Family_Health_History
 * @property boolean $_170314a14_Patient_List_Creation
 * @property boolean $_170314a15_PatientSpecific_Educatio
 * @property boolean $_170314a16_Electronic_Medication_Adm
 * @property boolean $_170314a17_Advance_Directives
 * @property boolean $_170314b1_Transitions_of_Care_rece
 * @property boolean $_170314b2_Transitions_of_Care_crea
 * @property boolean $_170314b3_Electronic_Prescribing
 * @property boolean $_170314b4_Clinical_Information_Recon
 * @property boolean $_170314b5_Incorporate_Laboratory_Tes
 * @property boolean $_170314b6_Transmission_of_Electronic
 * @property boolean $_170314b7_Data_Portability
 * @property boolean $_170314c1_Clinical_Quality_Measures
 * @property boolean $_170314c2_Clinical_Quality_Measures
 * @property boolean $_170314c3_Clinical_Quality_Measures
 * @property boolean $_170314d1_Authentication_access_con
 * @property boolean $_170314d2_Auditable_Events_and_Tampe
 * @property boolean $_170314d3_Audit_Reports
 * @property boolean $_170314d4_Amendments
 * @property boolean $_170314d5_Automatic_logoff
 * @property boolean $_170314d6_Emergency_access
 * @property boolean $_170314d7_EndUser_Device_Encryption
 * @property boolean $_170314d8_Integrity
 * @property boolean $_170314d9_Accounting_of_Disclosures
 * @property boolean $GGG__170314e1_View_Download_and_Transm
 * @property boolean $GGG__170314e2_Clinical_Summary
 * @property boolean $GGG__170314e3_Secure_Messaging
 * @property boolean $_170314f1_Immunization_Information
 * @property boolean $_170314f2_Transmission_to_Immunizati
 * @property boolean $_170314f3_Transmission_to_Public_Hea
 * @property boolean $_170314f4_Transmission_of_Reportable
 * @property boolean $_170314f5_Cancer_Case_Information
 * @property boolean $_170314f6_Transmission_to_Cancer_Reg
 * @property boolean $_170314g1_Automated_Numerator_Record
 * @property boolean $_170314g2_Automated_Measure_Calculat
 * @property boolean $_170314g3_SafetyEnhanced_Design
 * @property boolean $_170314g4_Quality_Management_System
 * @property string $CMS100_AMI_2_Aspirin_Prescribed_at_Dis
 * @property string $CMS102_Stroke_10_Ischemic_or_hemorrhag
 * @property string $CMS104_Stroke_2_Ischemic_stroke_Dis
 * @property string $CMS105_Stroke_6_Ischemic_stroke_Disc
 * @property string $CMS107_Stroke_8_Ischemic_or_hemorrhagi
 * @property string $CMS108_Venous_Thromboembolism_VTE_1
 * @property string $CMS109_VTE_4_VTE_Patients_Receiving_Un
 * @property string $CMS110_VTE_5_VTE_discharge_instruction
 * @property string $CMS111_ED_2_Emergency_Department_Throu
 * @property string $CMS113_PC_01_Elective_Delivery_Prior_t
 * @property string $CMS114_VTE_6_Incidence_of_potentially
 * @property string $CMS117_Childhood_Immunization_Status
 * @property string $CMS122_Diabetes_Hemoglobin_A1c_Poor
 * @property string $CMS123_Diabetes_Foot_Exam
 * @property string $CMS124_Cervical_Cancer_Screening
 * @property string $CMS125_Breast_Cancer_Screening
 * @property string $CMS126_Use_of_Appropriate_Medications
 * @property string $CMS127_Pneumonia_Vaccination_Status_fo
 * @property string $CMS128_Anti_depressant_Medication_Mana
 * @property string $CMS129_Prostate_Cancer_Avoidance_of
 * @property string $CMS130_Colorectal_Cancer_Screening
 * @property string $CMS131_Diabetes_Eye_Exam
 * @property string $CMS132_Cataracts_Complications_withi
 * @property string $CMS133_Cataracts_2040_or_Better_Vis
 * @property string $CMS134_Diabetes_Urine_Protein_Screen
 * @property string $CMS135_Heart_Failure_HF_Angiotensi
 * @property string $CMS136_ADHD_Follow_Up_Care_for_Child
 * @property string $CMS137_Initiation_and_Engagement_of_Al
 * @property string $CMS138_Preventive_Care_and_Screening
 * @property string $CMS139_Screening_for_Future_Fall_Risk
 * @property string $CMS140_Breast_Cancer_Hormonal_Therapy
 * @property string $CMS141_Colon_Cancer_Chemotherapy_for
 * @property string $CMS142_Diabetic_Retinopathy_Communic
 * @property string $CMS143_Primary_Open_Angle_Glaucoma_PO
 * @property string $CMS144_Heart_Failure_HF_Beta_Block
 * @property string $CMS145_Coronary_Artery_Disease_CAD
 * @property string $CMS146_Appropriate_Testing_for_Childre
 * @property string $CMS147_Preventative_Care_and_Screening
 * @property string $CMS148_Hemoglobin_A1c_Test_for_Pediatr
 * @property string $CMS149_Dementia_Cognitive_Assessment
 * @property string $CMS153_Chlamydia_Screening_for_Women
 * @property string $CMS154_Appropriate_Treatment_for_Child
 * @property string $CMS155_Weight_Assessment_and_Counselin
 * @property string $CMS156_Use_of_High_Risk_Medications_in
 * @property string $CMS157_Oncology_Medical_and_Radiatio
 * @property string $CMS158_Pregnant_women_that_had_HBsAg_t
 * @property string $CMS159_Depression_Remission_at_Twelve
 * @property string $CMS160_Depression_Utilization_of_the_P
 * @property string $CMS161_Major_Depressive_Disorder_MDD
 * @property string $CMS163_Diabetes_Low_Density_Lipoprot
 * @property string $CMS164_Ischemic_Vascular_Disease_IVD
 * @property string $CMS165_Controlling_High_Blood_Pressure
 * @property string $CMS166_Use_of_Imaging_Studies_for_Low
 * @property string $CMS167_Diabetic_Retinopathy_Document
 * @property string $CMS169_Bipolar_Disorder_and_Major_Depr
 * @property string $CMS171_SCIP_INF_1_Prophylactic_Antibio
 * @property string $CMS172_SCIP_INF_2_Prophylactic_Antibio
 * @property string $CMS177_Child_and_Adolescent_Major_Depr
 * @property string $CMS178_SCIP_INF_9_Urinary_catheter_re
 * @property string $CMS179_ADE_Prevention_and_Monitoring
 * @property string $CMS182_Ischemic_Vascular_Disease_IVD
 * @property string $CMS185_Healthy_Term_Newborn
 * @property string $CMS188_PN_6_Initial_Antibiotic_Select
 * @property string $CMS190_VTE_2_Intensive_Care_Unit_ICU
 * @property string $CMS22_Preventive_Care_and_Screening
 * @property string $CMS26V1_Home_Management_Plan_of_Care_H
 * @property string $CMS2_Preventive_Care_and_Screening_S
 * @property string $CMS30_AMI_10_Statin_Prescribed_at_Disc
 * @property string $CMS31_EHDI_1a_Hearing_screening_prio
 * @property string $CMS32_ED_3_Median_time_from_ED_arrival
 * @property string $CMS50_Closing_the_referral_loop_rece
 * @property string $CMS52_HIVAIDS_Pneumocystis_jiroveci
 * @property string $CMS53_AMI_8a_Primary_PCI_Received_Wit
 * @property string $CMS55_Emergency_Department_ED_1_Emer
 * @property string $CMS56_Functional_status_assessment_for
 * @property string $CMS60_AMI_7a_Fibrinolytic_Therapy_Rec
 * @property string $CMS61_Preventive_Care_and_Screening
 * @property string $CMS62_HIVAIDS_Medical_Visit
 * @property string $CMS64_Preventive_Care_and_Screening
 * @property string $CMS65_Hypertension_Improvement_in_bl
 * @property string $CMS66_Functional_status_assessment_for
 * @property string $CMS68_Documentation_of_Current_Medicat
 * @property string $CMS69_Preventive_Care_and_Screening_B
 * @property string $CMS71_Stroke_3_Ischemic_stroke_Antic
 * @property string $CMS72_Stroke_5_Ischemic_stroke_Antit
 * @property string $CMS73_VTE_3_VTE_Patients_with_Anticoag
 * @property string $CMS74_Primary_Caries_Prevention_Interv
 * @property string $CMS75_Children_who_have_dental_decay_o
 * @property string $CMS77_HIVAIDS_RNA_control_for_Patie
 * @property string $CMS82_Maternal_depression_screening
 * @property string $CMS90_Functional_status_assessment_for
 * @property string $CMS91_Stroke_4_Ischemic_stroke_Throm
 * @property string $CMS9V1_Exclusive_Breast_Milk_Feeding
 * @property string $Certifying_ATCB
 */
class Chpl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chpl';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['STG_Certification_Certification_ID'], 'required'],
            [['Certification_Edition_Year'], 'integer'],
            [['Published', '__170302a_Drugdrug_drugallergy', '_170302b_Drug_formulary_checks', '_170302c_Maintain_uptodate_prob', '_170302d_Maintain_active_med_list', '_170302e_Maintain_active_allergy_list', '_170302f_Record_and_Chart_Vital_Signs', '_170302f1_Record_and_Chart_Vital', '_170302f2_Calculate_BMI', '_170302f3_Plot_and_display_growth', '_170302g_Smoking_status', '_170302h_Incorporate_lab_test_results', '_170302i_Generate_patient_lists', '_170302j_Medication_Reconciliation', '_170302k_Submission_to_immun', '_170302l_Public_Health_Surveillance', '_170302m_Patient_Specific_Education', '_170302n_Automated_measure_calc', '_170302o_Access_Control', '_170302p_Emergency_Access', '_170302q_Automatic_logoff', '_170302r_Audit_Log', '_170302s_Integrity', '_170302t_Authentication', '_170302u_General_Encryption', '_170302v_Encryption_when_exchanging', '_170302w_Accounting_of_disclosures', '_170304a_Computerized_provider_OE', '_170304b_Electronic_Prescribing', '_170304c_Record_Demographics', '_170304d_Patient_Reminders', '_170304e_Clinical_Decision_Support', '_170304f_Electronic_Copy_of_Health', '_170304g_Timely_Access', '_170304h_Clinical_Summaries', '_170304i_Exchange_Clinical_Info', '_170304j_Calculate_and_Submit_Clinical', '_170306a_Computerized_Provider_OE', '_170306b_Record_Demographics', '_170306c_Clinical_Decision_Support', '_170306d_Electronic_copy_of_Health_Inf', '_170306d1_Electronic_copy_of_health', '_170306d2_Ecopy_of_health_info', '_170306e_Electronic_copy_of_discharge', '_170306f_Exchange_Clinical_Info', '_170306g_Reportable_Lab_Results', '_170306h_Advance_Directives', '_170306i_Calculate_and_Submit_Clinical', 'NQF_0001A_Asthma_Assessment', 'NQF_0002A_Pharyngitis_Testing', 'NQF_0004A_Alcohol_and_Other_Drug_Depe', 'NQF_0012A_Prenatal_Care_HIV', 'NQF_0013A_Hypertension_Blood_Pressure', 'NQF_0014A_Prenatal_Care_Immune_Globul', 'NQF_0018A_Controlling_High_Blood_Pres', 'NQF_0024A_Weight_Assessment_for_Child', 'NQF_0027A_Smoking_and_Tobacco_Use', 'NQF_0028A_Preventive_Care_Screening', 'NQF_0031A_Breast_Cancer_Screening', 'NQF_0032A_Cervical_Cancer_Screening', 'NQF_0033A_Chlamydia_Screening_for_Wome', 'NQF_0034A_Colorectal_Cancer_Screening', 'NQF_0036A_Use_of_Medication_for_Asthma', 'NQF_0038A_Child_Immunization_Status', 'NQF_0041A_Preventive_Care_Screening', 'NQF_0043A_Pneomonia_Vaccination_Status', 'NQF_0047A_Asthma_Pharmacologic_Therapy', 'NQF_0052A_Low_Back_Pain_Imaging', 'NQF_0055A_Diabetes_Eye_Exam', 'NQF_0056A_Diabetes_Foot_Exam', 'NQF_0059A_Diabetes_Hemoglobin_A1c', 'NQF_0061A_Diabetes_BP_Management', 'NQF_0062A_Diabates_Urine_Screening', 'NQF_0064A_Diabetes_LDL', 'NQF_0067A_Coronary_Artery_Disease', 'NQF_0068A_Vascular_Disease_Aspirin', 'NQF_0070A_CAD_BetaBlocker_Therapy', 'NQF_0073A_Vascular_Disease_BP_Mgmt', 'NQF_0074A_Coronary_Artery_Disease', 'NQF_0075A_Vascular_Disease_LDL', 'NQF_0081A_Heart_Failure_ACE_Inhibitor', 'NQF_0083A_Heart_Failure_LVSD_Therapy', 'NQF_0084A_Heart_Failure_Warfarin', 'NQF_0086A_Primary_Open_Angle_Glaucoma', 'NQF_0088A_Diabetic_Retinopathy_Docs', 'NQF_0089A_Diabetic_Retinopathy_Com', 'NQF_0105A_Antidepressant_Med_Mgmt', 'NQF_0371I_VTE_Prophylaxis', 'NQF_0372I_VTE_Intensive_Care_Unit', 'NQF_0373I_VTE_Anticoagulation_Overlap', 'NQF_0374I_VTE_Platelet_Monitoring', 'NQF_0375I_VTE_Discharge_Instructions', 'NQF_0376I_VTE_Incidence_of_Preventabl', 'NQF_0385A_Oncology_Colon_Cancer', 'NQF_0387A_Oncology_Brest_Cancer', 'NQF_0389A_Prostate_Cancer_Bone_Scan', 'NQF_0421A_Adult_Weight_Screening', 'NQF_0435I_Stroke_Discharge', 'NQF_0436I_Stroke_Anticoagulation', 'NQF_0437I_Stroke_Thrombolytic', 'NQF_0438I_Stroke_IschemicHemorrhagic', 'NQF_0439I_Stroke_Discharge_on_Statins', 'NQF_0440I_Stroke_Stroke_Education', 'NQF_0441I_Stroke_Rehabilitation', 'NQF_0495I_ED_Median_Time', 'NQF_0497I_ED_Admission_Decision', 'NQF_0575A_Diabetes_Hemoglobin_A1c', '_170314a1_Computerized_provider_OE', '_170314a2_Drugdrug_drugallergy', '_170314a3_Demographics', '_170314a4_Vital_signs_body_mass_ind', '_170314a5_Problem_List', '_170314a6_Medication_List', '_170314a7_Medication_Allergy_List', '_170314a8_Clinical_Decision_Support', '_170314a9_Electronic_Notes', '_170314a10_DrugFormulary_Checks', '_170314a11_Smoking_Status', '_170314a12_Image_Results', '_170314a13_Family_Health_History', '_170314a14_Patient_List_Creation', '_170314a15_PatientSpecific_Educatio', '_170314a16_Electronic_Medication_Adm', '_170314a17_Advance_Directives', '_170314b1_Transitions_of_Care_rece', '_170314b2_Transitions_of_Care_crea', '_170314b3_Electronic_Prescribing', '_170314b4_Clinical_Information_Recon', '_170314b5_Incorporate_Laboratory_Tes', '_170314b6_Transmission_of_Electronic', '_170314b7_Data_Portability', '_170314c1_Clinical_Quality_Measures', '_170314c2_Clinical_Quality_Measures', '_170314c3_Clinical_Quality_Measures', '_170314d1_Authentication_access_con', '_170314d2_Auditable_Events_and_Tampe', '_170314d3_Audit_Reports', '_170314d4_Amendments', '_170314d5_Automatic_logoff', '_170314d6_Emergency_access', '_170314d7_EndUser_Device_Encryption', '_170314d8_Integrity', '_170314d9_Accounting_of_Disclosures', 'GGG__170314e1_View_Download_and_Transm', 'GGG__170314e2_Clinical_Summary', 'GGG__170314e3_Secure_Messaging', '_170314f1_Immunization_Information', '_170314f2_Transmission_to_Immunizati', '_170314f3_Transmission_to_Public_Hea', '_170314f4_Transmission_of_Reportable', '_170314f5_Cancer_Case_Information', '_170314f6_Transmission_to_Cancer_Reg', '_170314g1_Automated_Numerator_Record', '_170314g2_Automated_Measure_Calculat', '_170314g3_SafetyEnhanced_Design', '_170314g4_Quality_Management_System'], 'boolean'],
            [['STG_Certification_Certification_ID'], 'string', 'max' => 44],
            [['ATCB_Certification_ID'], 'string', 'max' => 20],
            [['Practice_Setting', 'Certification_Date'], 'string', 'max' => 10],
            [['Product_Classification'], 'string', 'max' => 12],
            [['Product'], 'string', 'max' => 249],
            [['Vendor'], 'string', 'max' => 93],
            [['Additional_Software'], 'string', 'max' => 303],
            [['Version'], 'string', 'max' => 78],
            [['CMS100_AMI_2_Aspirin_Prescribed_at_Dis', 'CMS102_Stroke_10_Ischemic_or_hemorrhag', 'CMS104_Stroke_2_Ischemic_stroke_Dis', 'CMS105_Stroke_6_Ischemic_stroke_Disc', 'CMS107_Stroke_8_Ischemic_or_hemorrhagi', 'CMS108_Venous_Thromboembolism_VTE_1', 'CMS109_VTE_4_VTE_Patients_Receiving_Un', 'CMS110_VTE_5_VTE_discharge_instruction', 'CMS111_ED_2_Emergency_Department_Throu', 'CMS113_PC_01_Elective_Delivery_Prior_t', 'CMS114_VTE_6_Incidence_of_potentially', 'CMS117_Childhood_Immunization_Status', 'CMS122_Diabetes_Hemoglobin_A1c_Poor', 'CMS127_Pneumonia_Vaccination_Status_fo', 'CMS136_ADHD_Follow_Up_Care_for_Child', 'CMS138_Preventive_Care_and_Screening', 'CMS140_Breast_Cancer_Hormonal_Therapy', 'CMS146_Appropriate_Testing_for_Childre', 'CMS147_Preventative_Care_and_Screening', 'CMS153_Chlamydia_Screening_for_Women', 'CMS154_Appropriate_Treatment_for_Child', 'CMS155_Weight_Assessment_and_Counselin', 'CMS156_Use_of_High_Risk_Medications_in', 'CMS165_Controlling_High_Blood_Pressure', 'CMS166_Use_of_Imaging_Studies_for_Low', 'CMS171_SCIP_INF_1_Prophylactic_Antibio', 'CMS172_SCIP_INF_2_Prophylactic_Antibio', 'CMS178_SCIP_INF_9_Urinary_catheter_re', 'CMS185_Healthy_Term_Newborn', 'CMS188_PN_6_Initial_Antibiotic_Select', 'CMS190_VTE_2_Intensive_Care_Unit_ICU', 'CMS22_Preventive_Care_and_Screening', 'CMS2_Preventive_Care_and_Screening_S', 'CMS30_AMI_10_Statin_Prescribed_at_Disc', 'CMS31_EHDI_1a_Hearing_screening_prio', 'CMS32_ED_3_Median_time_from_ED_arrival', 'CMS50_Closing_the_referral_loop_rece', 'CMS53_AMI_8a_Primary_PCI_Received_Wit', 'CMS55_Emergency_Department_ED_1_Emer', 'CMS60_AMI_7a_Fibrinolytic_Therapy_Rec', 'CMS68_Documentation_of_Current_Medicat', 'CMS69_Preventive_Care_and_Screening_B', 'CMS71_Stroke_3_Ischemic_stroke_Antic', 'CMS72_Stroke_5_Ischemic_stroke_Antit', 'CMS73_VTE_3_VTE_Patients_with_Anticoag', 'CMS75_Children_who_have_dental_decay_o', 'CMS90_Functional_status_assessment_for', 'CMS91_Stroke_4_Ischemic_stroke_Throm', 'CMS9V1_Exclusive_Breast_Milk_Feeding'], 'string', 'max' => 6],
            [['CMS123_Diabetes_Foot_Exam', 'CMS124_Cervical_Cancer_Screening', 'CMS125_Breast_Cancer_Screening', 'CMS126_Use_of_Appropriate_Medications', 'CMS128_Anti_depressant_Medication_Mana', 'CMS129_Prostate_Cancer_Avoidance_of', 'CMS130_Colorectal_Cancer_Screening', 'CMS131_Diabetes_Eye_Exam', 'CMS132_Cataracts_Complications_withi', 'CMS133_Cataracts_2040_or_Better_Vis', 'CMS134_Diabetes_Urine_Protein_Screen', 'CMS135_Heart_Failure_HF_Angiotensi', 'CMS137_Initiation_and_Engagement_of_Al', 'CMS139_Screening_for_Future_Fall_Risk', 'CMS141_Colon_Cancer_Chemotherapy_for', 'CMS142_Diabetic_Retinopathy_Communic', 'CMS143_Primary_Open_Angle_Glaucoma_PO', 'CMS144_Heart_Failure_HF_Beta_Block', 'CMS145_Coronary_Artery_Disease_CAD', 'CMS148_Hemoglobin_A1c_Test_for_Pediatr', 'CMS149_Dementia_Cognitive_Assessment', 'CMS157_Oncology_Medical_and_Radiatio', 'CMS158_Pregnant_women_that_had_HBsAg_t', 'CMS159_Depression_Remission_at_Twelve', 'CMS160_Depression_Utilization_of_the_P', 'CMS161_Major_Depressive_Disorder_MDD', 'CMS163_Diabetes_Low_Density_Lipoprot', 'CMS164_Ischemic_Vascular_Disease_IVD', 'CMS167_Diabetic_Retinopathy_Document', 'CMS169_Bipolar_Disorder_and_Major_Depr', 'CMS177_Child_and_Adolescent_Major_Depr', 'CMS179_ADE_Prevention_and_Monitoring', 'CMS182_Ischemic_Vascular_Disease_IVD', 'CMS26V1_Home_Management_Plan_of_Care_H', 'CMS52_HIVAIDS_Pneumocystis_jiroveci', 'CMS56_Functional_status_assessment_for', 'CMS61_Preventive_Care_and_Screening', 'CMS62_HIVAIDS_Medical_Visit', 'CMS64_Preventive_Care_and_Screening', 'CMS65_Hypertension_Improvement_in_bl', 'CMS66_Functional_status_assessment_for', 'CMS74_Primary_Caries_Prevention_Interv', 'CMS77_HIVAIDS_RNA_control_for_Patie', 'CMS82_Maternal_depression_screening'], 'string', 'max' => 2],
            [['Certifying_ATCB'], 'string', 'max' => 19]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'STG_Certification_Certification_ID' => 'Stg  Certification  Certification  ID',
            'Certification_Edition_Year' => 'Certification  Edition  Year',
            'Published' => 'Published',
            'ATCB_Certification_ID' => 'Atcb  Certification  ID',
            'Practice_Setting' => 'Practice  Setting',
            'Product_Classification' => 'Product  Classification',
            'Product' => 'Product',
            'Vendor' => 'Vendor',
            'Additional_Software' => 'Additional  Software',
            'Version' => 'Version',
            'Certification_Date' => 'Certification  Date',
            '__170302a_Drugdrug_drugallergy' => '170302a  Drugdrug Drugallergy',
            '_170302b_Drug_formulary_checks' => '170302b  Drug Formulary Checks',
            '_170302c_Maintain_uptodate_prob' => '170302c  Maintain Uptodate Prob',
            '_170302d_Maintain_active_med_list' => '170302d  Maintain Active Med List',
            '_170302e_Maintain_active_allergy_list' => '170302e  Maintain Active Allergy List',
            '_170302f_Record_and_Chart_Vital_Signs' => '170302f  Record And  Chart  Vital  Signs',
            '_170302f1_Record_and_Chart_Vital' => '170302f1  Record And  Chart  Vital',
            '_170302f2_Calculate_BMI' => '170302f2  Calculate  Bmi',
            '_170302f3_Plot_and_display_growth' => '170302f3  Plot And Display Growth',
            '_170302g_Smoking_status' => '170302g  Smoking Status',
            '_170302h_Incorporate_lab_test_results' => '170302h  Incorporate Lab Test Results',
            '_170302i_Generate_patient_lists' => '170302i  Generate Patient Lists',
            '_170302j_Medication_Reconciliation' => '170302j  Medication  Reconciliation',
            '_170302k_Submission_to_immun' => '170302k  Submission To Immun',
            '_170302l_Public_Health_Surveillance' => '170302l  Public  Health  Surveillance',
            '_170302m_Patient_Specific_Education' => '170302m  Patient  Specific  Education',
            '_170302n_Automated_measure_calc' => '170302n  Automated Measure Calc',
            '_170302o_Access_Control' => '170302o  Access  Control',
            '_170302p_Emergency_Access' => '170302p  Emergency  Access',
            '_170302q_Automatic_logoff' => '170302q  Automatic Logoff',
            '_170302r_Audit_Log' => '170302r  Audit  Log',
            '_170302s_Integrity' => '170302s  Integrity',
            '_170302t_Authentication' => '170302t  Authentication',
            '_170302u_General_Encryption' => '170302u  General  Encryption',
            '_170302v_Encryption_when_exchanging' => '170302v  Encryption When Exchanging',
            '_170302w_Accounting_of_disclosures' => '170302w  Accounting Of Disclosures',
            '_170304a_Computerized_provider_OE' => '170304a  Computerized Provider  Oe',
            '_170304b_Electronic_Prescribing' => '170304b  Electronic  Prescribing',
            '_170304c_Record_Demographics' => '170304c  Record  Demographics',
            '_170304d_Patient_Reminders' => '170304d  Patient  Reminders',
            '_170304e_Clinical_Decision_Support' => '170304e  Clinical  Decision  Support',
            '_170304f_Electronic_Copy_of_Health' => '170304f  Electronic  Copy Of  Health',
            '_170304g_Timely_Access' => '170304g  Timely  Access',
            '_170304h_Clinical_Summaries' => '170304h  Clinical  Summaries',
            '_170304i_Exchange_Clinical_Info' => '170304i  Exchange  Clinical  Info',
            '_170304j_Calculate_and_Submit_Clinical' => '170304j  Calculate And  Submit  Clinical',
            '_170306a_Computerized_Provider_OE' => '170306a  Computerized  Provider  Oe',
            '_170306b_Record_Demographics' => '170306b  Record  Demographics',
            '_170306c_Clinical_Decision_Support' => '170306c  Clinical  Decision  Support',
            '_170306d_Electronic_copy_of_Health_Inf' => '170306d  Electronic Copy Of  Health  Inf',
            '_170306d1_Electronic_copy_of_health' => '170306d1  Electronic Copy Of Health',
            '_170306d2_Ecopy_of_health_info' => '170306d2  Ecopy Of Health Info',
            '_170306e_Electronic_copy_of_discharge' => '170306e  Electronic Copy Of Discharge',
            '_170306f_Exchange_Clinical_Info' => '170306f  Exchange  Clinical  Info',
            '_170306g_Reportable_Lab_Results' => '170306g  Reportable  Lab  Results',
            '_170306h_Advance_Directives' => '170306h  Advance  Directives',
            '_170306i_Calculate_and_Submit_Clinical' => '170306i  Calculate And  Submit  Clinical',
            'NQF_0001A_Asthma_Assessment' => 'Nqf 0001 A  Asthma  Assessment',
            'NQF_0002A_Pharyngitis_Testing' => 'Nqf 0002 A  Pharyngitis  Testing',
            'NQF_0004A_Alcohol_and_Other_Drug_Depe' => 'Nqf 0004 A  Alcohol And  Other  Drug  Depe',
            'NQF_0012A_Prenatal_Care_HIV' => 'Nqf 0012 A  Prenatal  Care  Hiv',
            'NQF_0013A_Hypertension_Blood_Pressure' => 'Nqf 0013 A  Hypertension  Blood  Pressure',
            'NQF_0014A_Prenatal_Care_Immune_Globul' => 'Nqf 0014 A  Prenatal  Care  Immune  Globul',
            'NQF_0018A_Controlling_High_Blood_Pres' => 'Nqf 0018 A  Controlling  High  Blood  Pres',
            'NQF_0024A_Weight_Assessment_for_Child' => 'Nqf 0024 A  Weight  Assessment For  Child',
            'NQF_0027A_Smoking_and_Tobacco_Use' => 'Nqf 0027 A  Smoking And  Tobacco  Use',
            'NQF_0028A_Preventive_Care_Screening' => 'Nqf 0028 A  Preventive  Care  Screening',
            'NQF_0031A_Breast_Cancer_Screening' => 'Nqf 0031 A  Breast  Cancer  Screening',
            'NQF_0032A_Cervical_Cancer_Screening' => 'Nqf 0032 A  Cervical  Cancer  Screening',
            'NQF_0033A_Chlamydia_Screening_for_Wome' => 'Nqf 0033 A  Chlamydia  Screening For  Wome',
            'NQF_0034A_Colorectal_Cancer_Screening' => 'Nqf 0034 A  Colorectal  Cancer  Screening',
            'NQF_0036A_Use_of_Medication_for_Asthma' => 'Nqf 0036 A  Use Of  Medication For  Asthma',
            'NQF_0038A_Child_Immunization_Status' => 'Nqf 0038 A  Child  Immunization  Status',
            'NQF_0041A_Preventive_Care_Screening' => 'Nqf 0041 A  Preventive  Care  Screening',
            'NQF_0043A_Pneomonia_Vaccination_Status' => 'Nqf 0043 A  Pneomonia  Vaccination  Status',
            'NQF_0047A_Asthma_Pharmacologic_Therapy' => 'Nqf 0047 A  Asthma  Pharmacologic  Therapy',
            'NQF_0052A_Low_Back_Pain_Imaging' => 'Nqf 0052 A  Low  Back  Pain  Imaging',
            'NQF_0055A_Diabetes_Eye_Exam' => 'Nqf 0055 A  Diabetes  Eye  Exam',
            'NQF_0056A_Diabetes_Foot_Exam' => 'Nqf 0056 A  Diabetes  Foot  Exam',
            'NQF_0059A_Diabetes_Hemoglobin_A1c' => 'Nqf 0059 A  Diabetes  Hemoglobin  A1c',
            'NQF_0061A_Diabetes_BP_Management' => 'Nqf 0061 A  Diabetes  Bp  Management',
            'NQF_0062A_Diabates_Urine_Screening' => 'Nqf 0062 A  Diabates  Urine  Screening',
            'NQF_0064A_Diabetes_LDL' => 'Nqf 0064 A  Diabetes  Ldl',
            'NQF_0067A_Coronary_Artery_Disease' => 'Nqf 0067 A  Coronary  Artery  Disease',
            'NQF_0068A_Vascular_Disease_Aspirin' => 'Nqf 0068 A  Vascular  Disease  Aspirin',
            'NQF_0070A_CAD_BetaBlocker_Therapy' => 'Nqf 0070 A  Cad  Beta Blocker  Therapy',
            'NQF_0073A_Vascular_Disease_BP_Mgmt' => 'Nqf 0073 A  Vascular  Disease  Bp  Mgmt',
            'NQF_0074A_Coronary_Artery_Disease' => 'Nqf 0074 A  Coronary  Artery  Disease',
            'NQF_0075A_Vascular_Disease_LDL' => 'Nqf 0075 A  Vascular  Disease  Ldl',
            'NQF_0081A_Heart_Failure_ACE_Inhibitor' => 'Nqf 0081 A  Heart  Failure  Ace  Inhibitor',
            'NQF_0083A_Heart_Failure_LVSD_Therapy' => 'Nqf 0083 A  Heart  Failure  Lvsd  Therapy',
            'NQF_0084A_Heart_Failure_Warfarin' => 'Nqf 0084 A  Heart  Failure  Warfarin',
            'NQF_0086A_Primary_Open_Angle_Glaucoma' => 'Nqf 0086 A  Primary  Open  Angle  Glaucoma',
            'NQF_0088A_Diabetic_Retinopathy_Docs' => 'Nqf 0088 A  Diabetic  Retinopathy  Docs',
            'NQF_0089A_Diabetic_Retinopathy_Com' => 'Nqf 0089 A  Diabetic  Retinopathy  Com',
            'NQF_0105A_Antidepressant_Med_Mgmt' => 'Nqf 0105 A  Antidepressant  Med  Mgmt',
            'NQF_0371I_VTE_Prophylaxis' => 'Nqf 0371 I  Vte  Prophylaxis',
            'NQF_0372I_VTE_Intensive_Care_Unit' => 'Nqf 0372 I  Vte  Intensive  Care  Unit',
            'NQF_0373I_VTE_Anticoagulation_Overlap' => 'Nqf 0373 I  Vte  Anticoagulation  Overlap',
            'NQF_0374I_VTE_Platelet_Monitoring' => 'Nqf 0374 I  Vte  Platelet  Monitoring',
            'NQF_0375I_VTE_Discharge_Instructions' => 'Nqf 0375 I  Vte  Discharge  Instructions',
            'NQF_0376I_VTE_Incidence_of_Preventabl' => 'Nqf 0376 I  Vte  Incidence Of  Preventabl',
            'NQF_0385A_Oncology_Colon_Cancer' => 'Nqf 0385 A  Oncology  Colon  Cancer',
            'NQF_0387A_Oncology_Brest_Cancer' => 'Nqf 0387 A  Oncology  Brest  Cancer',
            'NQF_0389A_Prostate_Cancer_Bone_Scan' => 'Nqf 0389 A  Prostate  Cancer  Bone  Scan',
            'NQF_0421A_Adult_Weight_Screening' => 'Nqf 0421 A  Adult  Weight  Screening',
            'NQF_0435I_Stroke_Discharge' => 'Nqf 0435 I  Stroke  Discharge',
            'NQF_0436I_Stroke_Anticoagulation' => 'Nqf 0436 I  Stroke  Anticoagulation',
            'NQF_0437I_Stroke_Thrombolytic' => 'Nqf 0437 I  Stroke  Thrombolytic',
            'NQF_0438I_Stroke_IschemicHemorrhagic' => 'Nqf 0438 I  Stroke  Ischemic Hemorrhagic',
            'NQF_0439I_Stroke_Discharge_on_Statins' => 'Nqf 0439 I  Stroke  Discharge On  Statins',
            'NQF_0440I_Stroke_Stroke_Education' => 'Nqf 0440 I  Stroke  Stroke  Education',
            'NQF_0441I_Stroke_Rehabilitation' => 'Nqf 0441 I  Stroke  Rehabilitation',
            'NQF_0495I_ED_Median_Time' => 'Nqf 0495 I  Ed  Median  Time',
            'NQF_0497I_ED_Admission_Decision' => 'Nqf 0497 I  Ed  Admission  Decision',
            'NQF_0575A_Diabetes_Hemoglobin_A1c' => 'Nqf 0575 A  Diabetes  Hemoglobin  A1c',
            '_170314a1_Computerized_provider_OE' => '170314a1  Computerized Provider  Oe',
            '_170314a2_Drugdrug_drugallergy' => '170314a2  Drugdrug Drugallergy',
            '_170314a3_Demographics' => '170314a3  Demographics',
            '_170314a4_Vital_signs_body_mass_ind' => '170314a4  Vital Signs Body Mass Ind',
            '_170314a5_Problem_List' => '170314a5  Problem  List',
            '_170314a6_Medication_List' => '170314a6  Medication  List',
            '_170314a7_Medication_Allergy_List' => '170314a7  Medication  Allergy  List',
            '_170314a8_Clinical_Decision_Support' => '170314a8  Clinical  Decision  Support',
            '_170314a9_Electronic_Notes' => '170314a9  Electronic  Notes',
            '_170314a10_DrugFormulary_Checks' => '170314a10  Drug Formulary  Checks',
            '_170314a11_Smoking_Status' => '170314a11  Smoking  Status',
            '_170314a12_Image_Results' => '170314a12  Image  Results',
            '_170314a13_Family_Health_History' => '170314a13  Family  Health  History',
            '_170314a14_Patient_List_Creation' => '170314a14  Patient  List  Creation',
            '_170314a15_PatientSpecific_Educatio' => '170314a15  Patient Specific  Educatio',
            '_170314a16_Electronic_Medication_Adm' => '170314a16  Electronic  Medication  Adm',
            '_170314a17_Advance_Directives' => '170314a17  Advance  Directives',
            '_170314b1_Transitions_of_Care_rece' => '170314b1  Transitions Of  Care Rece',
            '_170314b2_Transitions_of_Care_crea' => '170314b2  Transitions Of  Care Crea',
            '_170314b3_Electronic_Prescribing' => '170314b3  Electronic  Prescribing',
            '_170314b4_Clinical_Information_Recon' => '170314b4  Clinical  Information  Recon',
            '_170314b5_Incorporate_Laboratory_Tes' => '170314b5  Incorporate  Laboratory  Tes',
            '_170314b6_Transmission_of_Electronic' => '170314b6  Transmission Of  Electronic',
            '_170314b7_Data_Portability' => '170314b7  Data  Portability',
            '_170314c1_Clinical_Quality_Measures' => '170314c1  Clinical  Quality  Measures',
            '_170314c2_Clinical_Quality_Measures' => '170314c2  Clinical  Quality  Measures',
            '_170314c3_Clinical_Quality_Measures' => '170314c3  Clinical  Quality  Measures',
            '_170314d1_Authentication_access_con' => '170314d1  Authentication Access Con',
            '_170314d2_Auditable_Events_and_Tampe' => '170314d2  Auditable  Events And  Tampe',
            '_170314d3_Audit_Reports' => '170314d3  Audit  Reports',
            '_170314d4_Amendments' => '170314d4  Amendments',
            '_170314d5_Automatic_logoff' => '170314d5  Automatic Logoff',
            '_170314d6_Emergency_access' => '170314d6  Emergency Access',
            '_170314d7_EndUser_Device_Encryption' => '170314d7  End User  Device  Encryption',
            '_170314d8_Integrity' => '170314d8  Integrity',
            '_170314d9_Accounting_of_Disclosures' => '170314d9  Accounting Of  Disclosures',
            'GGG__170314e1_View_Download_and_Transm' => 'Ggg _170314e1  View  Download And  Transm',
            'GGG__170314e2_Clinical_Summary' => 'Ggg _170314e2  Clinical  Summary',
            'GGG__170314e3_Secure_Messaging' => 'Ggg _170314e3  Secure  Messaging',
            '_170314f1_Immunization_Information' => '170314f1  Immunization  Information',
            '_170314f2_Transmission_to_Immunizati' => '170314f2  Transmission To  Immunizati',
            '_170314f3_Transmission_to_Public_Hea' => '170314f3  Transmission To  Public  Hea',
            '_170314f4_Transmission_of_Reportable' => '170314f4  Transmission Of  Reportable',
            '_170314f5_Cancer_Case_Information' => '170314f5  Cancer  Case  Information',
            '_170314f6_Transmission_to_Cancer_Reg' => '170314f6  Transmission To  Cancer  Reg',
            '_170314g1_Automated_Numerator_Record' => '170314g1  Automated  Numerator  Record',
            '_170314g2_Automated_Measure_Calculat' => '170314g2  Automated  Measure  Calculat',
            '_170314g3_SafetyEnhanced_Design' => '170314g3  Safety Enhanced  Design',
            '_170314g4_Quality_Management_System' => '170314g4  Quality  Management  System',
            'CMS100_AMI_2_Aspirin_Prescribed_at_Dis' => 'Cms100  Ami 2  Aspirin  Prescribed At  Dis',
            'CMS102_Stroke_10_Ischemic_or_hemorrhag' => 'Cms102  Stroke 10  Ischemic Or Hemorrhag',
            'CMS104_Stroke_2_Ischemic_stroke_Dis' => 'Cms104  Stroke 2  Ischemic Stroke  Dis',
            'CMS105_Stroke_6_Ischemic_stroke_Disc' => 'Cms105  Stroke 6  Ischemic Stroke  Disc',
            'CMS107_Stroke_8_Ischemic_or_hemorrhagi' => 'Cms107  Stroke 8  Ischemic Or Hemorrhagi',
            'CMS108_Venous_Thromboembolism_VTE_1' => 'Cms108  Venous  Thromboembolism  Vte 1',
            'CMS109_VTE_4_VTE_Patients_Receiving_Un' => 'Cms109  Vte 4  Vte  Patients  Receiving  Un',
            'CMS110_VTE_5_VTE_discharge_instruction' => 'Cms110  Vte 5  Vte Discharge Instruction',
            'CMS111_ED_2_Emergency_Department_Throu' => 'Cms111  Ed 2  Emergency  Department  Throu',
            'CMS113_PC_01_Elective_Delivery_Prior_t' => 'Cms113  Pc 01  Elective  Delivery  Prior T',
            'CMS114_VTE_6_Incidence_of_potentially' => 'Cms114  Vte 6  Incidence Of Potentially',
            'CMS117_Childhood_Immunization_Status' => 'Cms117  Childhood  Immunization  Status',
            'CMS122_Diabetes_Hemoglobin_A1c_Poor' => 'Cms122  Diabetes  Hemoglobin  A1c  Poor',
            'CMS123_Diabetes_Foot_Exam' => 'Cms123  Diabetes  Foot  Exam',
            'CMS124_Cervical_Cancer_Screening' => 'Cms124  Cervical  Cancer  Screening',
            'CMS125_Breast_Cancer_Screening' => 'Cms125  Breast  Cancer  Screening',
            'CMS126_Use_of_Appropriate_Medications' => 'Cms126  Use Of  Appropriate  Medications',
            'CMS127_Pneumonia_Vaccination_Status_fo' => 'Cms127  Pneumonia  Vaccination  Status Fo',
            'CMS128_Anti_depressant_Medication_Mana' => 'Cms128  Anti Depressant  Medication  Mana',
            'CMS129_Prostate_Cancer_Avoidance_of' => 'Cms129  Prostate  Cancer  Avoidance Of',
            'CMS130_Colorectal_Cancer_Screening' => 'Cms130  Colorectal  Cancer  Screening',
            'CMS131_Diabetes_Eye_Exam' => 'Cms131  Diabetes  Eye  Exam',
            'CMS132_Cataracts_Complications_withi' => 'Cms132  Cataracts  Complications Withi',
            'CMS133_Cataracts_2040_or_Better_Vis' => 'Cms133  Cataracts 2040 Or  Better  Vis',
            'CMS134_Diabetes_Urine_Protein_Screen' => 'Cms134  Diabetes  Urine  Protein  Screen',
            'CMS135_Heart_Failure_HF_Angiotensi' => 'Cms135  Heart  Failure  Hf  Angiotensi',
            'CMS136_ADHD_Follow_Up_Care_for_Child' => 'Cms136  Adhd  Follow  Up  Care For  Child',
            'CMS137_Initiation_and_Engagement_of_Al' => 'Cms137  Initiation And  Engagement Of  Al',
            'CMS138_Preventive_Care_and_Screening' => 'Cms138  Preventive  Care And  Screening',
            'CMS139_Screening_for_Future_Fall_Risk' => 'Cms139  Screening For  Future  Fall  Risk',
            'CMS140_Breast_Cancer_Hormonal_Therapy' => 'Cms140  Breast  Cancer  Hormonal  Therapy',
            'CMS141_Colon_Cancer_Chemotherapy_for' => 'Cms141  Colon  Cancer  Chemotherapy For',
            'CMS142_Diabetic_Retinopathy_Communic' => 'Cms142  Diabetic  Retinopathy  Communic',
            'CMS143_Primary_Open_Angle_Glaucoma_PO' => 'Cms143  Primary  Open  Angle  Glaucoma  Po',
            'CMS144_Heart_Failure_HF_Beta_Block' => 'Cms144  Heart  Failure  Hf  Beta  Block',
            'CMS145_Coronary_Artery_Disease_CAD' => 'Cms145  Coronary  Artery  Disease  Cad',
            'CMS146_Appropriate_Testing_for_Childre' => 'Cms146  Appropriate  Testing For  Childre',
            'CMS147_Preventative_Care_and_Screening' => 'Cms147  Preventative  Care And  Screening',
            'CMS148_Hemoglobin_A1c_Test_for_Pediatr' => 'Cms148  Hemoglobin  A1c  Test For  Pediatr',
            'CMS149_Dementia_Cognitive_Assessment' => 'Cms149  Dementia  Cognitive  Assessment',
            'CMS153_Chlamydia_Screening_for_Women' => 'Cms153  Chlamydia  Screening For  Women',
            'CMS154_Appropriate_Treatment_for_Child' => 'Cms154  Appropriate  Treatment For  Child',
            'CMS155_Weight_Assessment_and_Counselin' => 'Cms155  Weight  Assessment And  Counselin',
            'CMS156_Use_of_High_Risk_Medications_in' => 'Cms156  Use Of  High  Risk  Medications In',
            'CMS157_Oncology_Medical_and_Radiatio' => 'Cms157  Oncology  Medical And  Radiatio',
            'CMS158_Pregnant_women_that_had_HBsAg_t' => 'Cms158  Pregnant Women That Had  Hbs Ag T',
            'CMS159_Depression_Remission_at_Twelve' => 'Cms159  Depression  Remission At  Twelve',
            'CMS160_Depression_Utilization_of_the_P' => 'Cms160  Depression  Utilization Of The  P',
            'CMS161_Major_Depressive_Disorder_MDD' => 'Cms161  Major  Depressive  Disorder  Mdd',
            'CMS163_Diabetes_Low_Density_Lipoprot' => 'Cms163  Diabetes  Low  Density  Lipoprot',
            'CMS164_Ischemic_Vascular_Disease_IVD' => 'Cms164  Ischemic  Vascular  Disease  Ivd',
            'CMS165_Controlling_High_Blood_Pressure' => 'Cms165  Controlling  High  Blood  Pressure',
            'CMS166_Use_of_Imaging_Studies_for_Low' => 'Cms166  Use Of  Imaging  Studies For  Low',
            'CMS167_Diabetic_Retinopathy_Document' => 'Cms167  Diabetic  Retinopathy  Document',
            'CMS169_Bipolar_Disorder_and_Major_Depr' => 'Cms169  Bipolar  Disorder And  Major  Depr',
            'CMS171_SCIP_INF_1_Prophylactic_Antibio' => 'Cms171  Scip  Inf 1  Prophylactic  Antibio',
            'CMS172_SCIP_INF_2_Prophylactic_Antibio' => 'Cms172  Scip  Inf 2  Prophylactic  Antibio',
            'CMS177_Child_and_Adolescent_Major_Depr' => 'Cms177  Child And  Adolescent  Major  Depr',
            'CMS178_SCIP_INF_9_Urinary_catheter_re' => 'Cms178  Scip  Inf 9  Urinary Catheter Re',
            'CMS179_ADE_Prevention_and_Monitoring' => 'Cms179  Ade  Prevention And  Monitoring',
            'CMS182_Ischemic_Vascular_Disease_IVD' => 'Cms182  Ischemic  Vascular  Disease  Ivd',
            'CMS185_Healthy_Term_Newborn' => 'Cms185  Healthy  Term  Newborn',
            'CMS188_PN_6_Initial_Antibiotic_Select' => 'Cms188  Pn 6  Initial  Antibiotic  Select',
            'CMS190_VTE_2_Intensive_Care_Unit_ICU' => 'Cms190  Vte 2  Intensive  Care  Unit  Icu',
            'CMS22_Preventive_Care_and_Screening' => 'Cms22  Preventive  Care And  Screening',
            'CMS26V1_Home_Management_Plan_of_Care_H' => 'Cms26 V1  Home  Management  Plan Of  Care  H',
            'CMS2_Preventive_Care_and_Screening_S' => 'Cms2  Preventive  Care And  Screening  S',
            'CMS30_AMI_10_Statin_Prescribed_at_Disc' => 'Cms30  Ami 10  Statin  Prescribed At  Disc',
            'CMS31_EHDI_1a_Hearing_screening_prio' => 'Cms31  Ehdi 1a  Hearing Screening Prio',
            'CMS32_ED_3_Median_time_from_ED_arrival' => 'Cms32  Ed 3  Median Time From  Ed Arrival',
            'CMS50_Closing_the_referral_loop_rece' => 'Cms50  Closing The Referral Loop Rece',
            'CMS52_HIVAIDS_Pneumocystis_jiroveci' => 'Cms52  Hivaids  Pneumocystis Jiroveci',
            'CMS53_AMI_8a_Primary_PCI_Received_Wit' => 'Cms53  Ami 8a  Primary  Pci  Received  Wit',
            'CMS55_Emergency_Department_ED_1_Emer' => 'Cms55  Emergency  Department  Ed 1  Emer',
            'CMS56_Functional_status_assessment_for' => 'Cms56  Functional Status Assessment For',
            'CMS60_AMI_7a_Fibrinolytic_Therapy_Rec' => 'Cms60  Ami 7a  Fibrinolytic  Therapy  Rec',
            'CMS61_Preventive_Care_and_Screening' => 'Cms61  Preventive  Care And  Screening',
            'CMS62_HIVAIDS_Medical_Visit' => 'Cms62  Hivaids  Medical  Visit',
            'CMS64_Preventive_Care_and_Screening' => 'Cms64  Preventive  Care And  Screening',
            'CMS65_Hypertension_Improvement_in_bl' => 'Cms65  Hypertension  Improvement In Bl',
            'CMS66_Functional_status_assessment_for' => 'Cms66  Functional Status Assessment For',
            'CMS68_Documentation_of_Current_Medicat' => 'Cms68  Documentation Of  Current  Medicat',
            'CMS69_Preventive_Care_and_Screening_B' => 'Cms69  Preventive  Care And  Screening  B',
            'CMS71_Stroke_3_Ischemic_stroke_Antic' => 'Cms71  Stroke 3  Ischemic Stroke  Antic',
            'CMS72_Stroke_5_Ischemic_stroke_Antit' => 'Cms72  Stroke 5  Ischemic Stroke  Antit',
            'CMS73_VTE_3_VTE_Patients_with_Anticoag' => 'Cms73  Vte 3  Vte  Patients With  Anticoag',
            'CMS74_Primary_Caries_Prevention_Interv' => 'Cms74  Primary  Caries  Prevention  Interv',
            'CMS75_Children_who_have_dental_decay_o' => 'Cms75  Children Who Have Dental Decay O',
            'CMS77_HIVAIDS_RNA_control_for_Patie' => 'Cms77  Hivaids  Rna Control For  Patie',
            'CMS82_Maternal_depression_screening' => 'Cms82  Maternal Depression Screening',
            'CMS90_Functional_status_assessment_for' => 'Cms90  Functional Status Assessment For',
            'CMS91_Stroke_4_Ischemic_stroke_Throm' => 'Cms91  Stroke 4  Ischemic Stroke  Throm',
            'CMS9V1_Exclusive_Breast_Milk_Feeding' => 'Cms9 V1  Exclusive  Breast  Milk  Feeding',
            'Certifying_ATCB' => 'ACB',
        ];
    }
}
