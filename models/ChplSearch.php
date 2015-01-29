<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Chpl;

/**
 * ChplSearch represents the model behind the search form about `app\models\Chpl`.
 */
class ChplSearch extends Chpl
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['STG_Certification_Certification_ID', 'ATCB_Certification_ID', 'Practice_Setting', 'Product_Classification', 'Product', 'Vendor', 'Additional_Software', 'Version', 'Certification_Date', 'CMS100_AMI_2_Aspirin_Prescribed_at_Dis', 'CMS102_Stroke_10_Ischemic_or_hemorrhag', 'CMS104_Stroke_2_Ischemic_stroke_Dis', 'CMS105_Stroke_6_Ischemic_stroke_Disc', 'CMS107_Stroke_8_Ischemic_or_hemorrhagi', 'CMS108_Venous_Thromboembolism_VTE_1', 'CMS109_VTE_4_VTE_Patients_Receiving_Un', 'CMS110_VTE_5_VTE_discharge_instruction', 'CMS111_ED_2_Emergency_Department_Throu', 'CMS113_PC_01_Elective_Delivery_Prior_t', 'CMS114_VTE_6_Incidence_of_potentially', 'CMS117_Childhood_Immunization_Status', 'CMS122_Diabetes_Hemoglobin_A1c_Poor', 'CMS123_Diabetes_Foot_Exam', 'CMS124_Cervical_Cancer_Screening', 'CMS125_Breast_Cancer_Screening', 'CMS126_Use_of_Appropriate_Medications', 'CMS127_Pneumonia_Vaccination_Status_fo', 'CMS128_Anti_depressant_Medication_Mana', 'CMS129_Prostate_Cancer_Avoidance_of', 'CMS130_Colorectal_Cancer_Screening', 'CMS131_Diabetes_Eye_Exam', 'CMS132_Cataracts_Complications_withi', 'CMS133_Cataracts_2040_or_Better_Vis', 'CMS134_Diabetes_Urine_Protein_Screen', 'CMS135_Heart_Failure_HF_Angiotensi', 'CMS136_ADHD_Follow_Up_Care_for_Child', 'CMS137_Initiation_and_Engagement_of_Al', 'CMS138_Preventive_Care_and_Screening', 'CMS139_Screening_for_Future_Fall_Risk', 'CMS140_Breast_Cancer_Hormonal_Therapy', 'CMS141_Colon_Cancer_Chemotherapy_for', 'CMS142_Diabetic_Retinopathy_Communic', 'CMS143_Primary_Open_Angle_Glaucoma_PO', 'CMS144_Heart_Failure_HF_Beta_Block', 'CMS145_Coronary_Artery_Disease_CAD', 'CMS146_Appropriate_Testing_for_Childre', 'CMS147_Preventative_Care_and_Screening', 'CMS148_Hemoglobin_A1c_Test_for_Pediatr', 'CMS149_Dementia_Cognitive_Assessment', 'CMS153_Chlamydia_Screening_for_Women', 'CMS154_Appropriate_Treatment_for_Child', 'CMS155_Weight_Assessment_and_Counselin', 'CMS156_Use_of_High_Risk_Medications_in', 'CMS157_Oncology_Medical_and_Radiatio', 'CMS158_Pregnant_women_that_had_HBsAg_t', 'CMS159_Depression_Remission_at_Twelve', 'CMS160_Depression_Utilization_of_the_P', 'CMS161_Major_Depressive_Disorder_MDD', 'CMS163_Diabetes_Low_Density_Lipoprot', 'CMS164_Ischemic_Vascular_Disease_IVD', 'CMS165_Controlling_High_Blood_Pressure', 'CMS166_Use_of_Imaging_Studies_for_Low', 'CMS167_Diabetic_Retinopathy_Document', 'CMS169_Bipolar_Disorder_and_Major_Depr', 'CMS171_SCIP_INF_1_Prophylactic_Antibio', 'CMS172_SCIP_INF_2_Prophylactic_Antibio', 'CMS177_Child_and_Adolescent_Major_Depr', 'CMS178_SCIP_INF_9_Urinary_catheter_re', 'CMS179_ADE_Prevention_and_Monitoring', 'CMS182_Ischemic_Vascular_Disease_IVD', 'CMS185_Healthy_Term_Newborn', 'CMS188_PN_6_Initial_Antibiotic_Select', 'CMS190_VTE_2_Intensive_Care_Unit_ICU', 'CMS22_Preventive_Care_and_Screening', 'CMS26V1_Home_Management_Plan_of_Care_H', 'CMS2_Preventive_Care_and_Screening_S', 'CMS30_AMI_10_Statin_Prescribed_at_Disc', 'CMS31_EHDI_1a_Hearing_screening_prio', 'CMS32_ED_3_Median_time_from_ED_arrival', 'CMS50_Closing_the_referral_loop_rece', 'CMS52_HIVAIDS_Pneumocystis_jiroveci', 'CMS53_AMI_8a_Primary_PCI_Received_Wit', 'CMS55_Emergency_Department_ED_1_Emer', 'CMS56_Functional_status_assessment_for', 'CMS60_AMI_7a_Fibrinolytic_Therapy_Rec', 'CMS61_Preventive_Care_and_Screening', 'CMS62_HIVAIDS_Medical_Visit', 'CMS64_Preventive_Care_and_Screening', 'CMS65_Hypertension_Improvement_in_bl', 'CMS66_Functional_status_assessment_for', 'CMS68_Documentation_of_Current_Medicat', 'CMS69_Preventive_Care_and_Screening_B', 'CMS71_Stroke_3_Ischemic_stroke_Antic', 'CMS72_Stroke_5_Ischemic_stroke_Antit', 'CMS73_VTE_3_VTE_Patients_with_Anticoag', 'CMS74_Primary_Caries_Prevention_Interv', 'CMS75_Children_who_have_dental_decay_o', 'CMS77_HIVAIDS_RNA_control_for_Patie', 'CMS82_Maternal_depression_screening', 'CMS90_Functional_status_assessment_for', 'CMS91_Stroke_4_Ischemic_stroke_Throm', 'CMS9V1_Exclusive_Breast_Milk_Feeding', 'Certifying_ATCB'], 'safe'],
            [['Certification_Edition_Year'], 'integer'],
            [['Published', '_170302a_Drugdrug_drugallergy', '_170302b_Drug_formulary_checks', '_170302c_Maintain_uptodate_prob', '_170302d_Maintain_active_med_list', '_170302e_Maintain_active_allergy_list', '_170302f_Record_and_Chart_Vital_Signs', '_170302f1_Record_and_Chart_Vital', '_170302f2_Calculate_BMI', '_170302f3_Plot_and_display_growth', '_170302g_Smoking_status', '_170302h_Incorporate_lab_test_results', '_170302i_Generate_patient_lists', '_170302j_Medication_Reconciliation', '_170302k_Submission_to_immun', '_170302l_Public_Health_Surveillance', '_170302m_Patient_Specific_Education', '_170302n_Automated_measure_calc', '_170302o_Access_Control', '_170302p_Emergency_Access', '_170302q_Automatic_logoff', '_170302r_Audit_Log', '_170302s_Integrity', '_170302t_Authentication', '_170302u_General_Encryption', '_170302v_Encryption_when_exchanging', '_170302w_Accounting_of_disclosures', '_170304a_Computerized_provider_OE', '_170304b_Electronic_Prescribing', '_170304c_Record_Demographics', '_170304d_Patient_Reminders', '_170304e_Clinical_Decision_Support', '_170304f_Electronic_Copy_of_Health', '_170304g_Timely_Access', '_170304h_Clinical_Summaries', '_170304i_Exchange_Clinical_Info', '_170304j_Calculate_and_Submit_Clinical', '_170306a_Computerized_Provider_OE', '_170306b_Record_Demographics', '_170306c_Clinical_Decision_Support', '_170306d_Electronic_copy_of_Health_Inf', '_170306d1_Electronic_copy_of_health', '_170306d2_Ecopy_of_health_info', '_170306e_Electronic_copy_of_discharge', '_170306f_Exchange_Clinical_Info', '_170306g_Reportable_Lab_Results', '_170306h_Advance_Directives', '_170306i_Calculate_and_Submit_Clinical', 'NQF_0001A_Asthma_Assessment', 'NQF_0002A_Pharyngitis_Testing', 'NQF_0004A_Alcohol_and_Other_Drug_Depe', 'NQF_0012A_Prenatal_Care_HIV', 'NQF_0013A_Hypertension_Blood_Pressure', 'NQF_0014A_Prenatal_Care_Immune_Globul', 'NQF_0018A_Controlling_High_Blood_Pres', 'NQF_0024A_Weight_Assessment_for_Child', 'NQF_0027A_Smoking_and_Tobacco_Use', 'NQF_0028A_Preventive_Care_Screening', 'NQF_0031A_Breast_Cancer_Screening', 'NQF_0032A_Cervical_Cancer_Screening', 'NQF_0033A_Chlamydia_Screening_for_Wome', 'NQF_0034A_Colorectal_Cancer_Screening', 'NQF_0036A_Use_of_Medication_for_Asthma', 'NQF_0038A_Child_Immunization_Status', 'NQF_0041A_Preventive_Care_Screening', 'NQF_0043A_Pneomonia_Vaccination_Status', 'NQF_0047A_Asthma_Pharmacologic_Therapy', 'NQF_0052A_Low_Back_Pain_Imaging', 'NQF_0055A_Diabetes_Eye_Exam', 'NQF_0056A_Diabetes_Foot_Exam', 'NQF_0059A_Diabetes_Hemoglobin_A1c', 'NQF_0061A_Diabetes_BP_Management', 'NQF_0062A_Diabates_Urine_Screening', 'NQF_0064A_Diabetes_LDL', 'NQF_0067A_Coronary_Artery_Disease', 'NQF_0068A_Vascular_Disease_Aspirin', 'NQF_0070A_CAD_BetaBlocker_Therapy', 'NQF_0073A_Vascular_Disease_BP_Mgmt', 'NQF_0074A_Coronary_Artery_Disease', 'NQF_0075A_Vascular_Disease_LDL', 'NQF_0081A_Heart_Failure_ACE_Inhibitor', 'NQF_0083A_Heart_Failure_LVSD_Therapy', 'NQF_0084A_Heart_Failure_Warfarin', 'NQF_0086A_Primary_Open_Angle_Glaucoma', 'NQF_0088A_Diabetic_Retinopathy_Docs', 'NQF_0089A_Diabetic_Retinopathy_Com', 'NQF_0105A_Antidepressant_Med_Mgmt', 'NQF_0371I_VTE_Prophylaxis', 'NQF_0372I_VTE_Intensive_Care_Unit', 'NQF_0373I_VTE_Anticoagulation_Overlap', 'NQF_0374I_VTE_Platelet_Monitoring', 'NQF_0375I_VTE_Discharge_Instructions', 'NQF_0376I_VTE_Incidence_of_Preventabl', 'NQF_0385A_Oncology_Colon_Cancer', 'NQF_0387A_Oncology_Brest_Cancer', 'NQF_0389A_Prostate_Cancer_Bone_Scan', 'NQF_0421A_Adult_Weight_Screening', 'NQF_0435I_Stroke_Discharge', 'NQF_0436I_Stroke_Anticoagulation', 'NQF_0437I_Stroke_Thrombolytic', 'NQF_0438I_Stroke_IschemicHemorrhagic', 'NQF_0439I_Stroke_Discharge_on_Statins', 'NQF_0440I_Stroke_Stroke_Education', 'NQF_0441I_Stroke_Rehabilitation', 'NQF_0495I_ED_Median_Time', 'NQF_0497I_ED_Admission_Decision', 'NQF_0575A_Diabetes_Hemoglobin_A1c', '_170314a1_Computerized_provider_OE', '_170314a2_Drugdrug_drugallergy', '_170314a3_Demographics', '_170314a4_Vital_signs_body_mass_ind', '_170314a5_Problem_List', '_170314a6_Medication_List', '_170314a7_Medication_Allergy_List', '_170314a8_Clinical_Decision_Support', '_170314a9_Electronic_Notes', '_170314a10_DrugFormulary_Checks', '_170314a11_Smoking_Status', '_170314a12_Image_Results', '_170314a13_Family_Health_History', '_170314a14_Patient_List_Creation', '_170314a15_PatientSpecific_Educatio', '_170314a16_Electronic_Medication_Adm', '_170314a17_Advance_Directives', '_170314b1_Transitions_of_Care_rece', '_170314b2_Transitions_of_Care_crea', '_170314b3_Electronic_Prescribing', '_170314b4_Clinical_Information_Recon', '_170314b5_Incorporate_Laboratory_Tes', '_170314b6_Transmission_of_Electronic', '_170314b7_Data_Portability', '_170314c1_Clinical_Quality_Measures', '_170314c2_Clinical_Quality_Measures', '_170314c3_Clinical_Quality_Measures', '_170314d1_Authentication_access_con', '_170314d2_Auditable_Events_and_Tampe', '_170314d3_Audit_Reports', '_170314d4_Amendments', '_170314d5_Automatic_logoff', '_170314d6_Emergency_access', '_170314d7_EndUser_Device_Encryption', '_170314d8_Integrity', '_170314d9_Accounting_of_Disclosures', 'GGG__170314e1_View_Download_and_Transm', 'GGG__170314e2_Clinical_Summary', 'GGG__170314e3_Secure_Messaging', '_170314f1_Immunization_Information', '_170314f2_Transmission_to_Immunizati', '_170314f3_Transmission_to_Public_Hea', '_170314f4_Transmission_of_Reportable', '_170314f5_Cancer_Case_Information', '_170314f6_Transmission_to_Cancer_Reg', '_170314g1_Automated_Numerator_Record', '_170314g2_Automated_Measure_Calculat', '_170314g3_SafetyEnhanced_Design', '_170314g4_Quality_Management_System'], 'boolean'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Chpl::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Certification_Edition_Year' => $this->Certification_Edition_Year,
            'Published' => $this->Published,

			'_170302a_Drugdrug_drugallergy' => $this->_170302a_Drugdrug_drugallergy,
            '_170302b_Drug_formulary_checks' => $this->_170302b_Drug_formulary_checks,
            '_170302c_Maintain_uptodate_prob' => $this->_170302c_Maintain_uptodate_prob,
            '_170302d_Maintain_active_med_list' => $this->_170302d_Maintain_active_med_list,
            '_170302e_Maintain_active_allergy_list' => $this->_170302e_Maintain_active_allergy_list,
            '_170302f_Record_and_Chart_Vital_Signs' => $this->_170302f_Record_and_Chart_Vital_Signs,
            '_170302f1_Record_and_Chart_Vital' => $this->_170302f1_Record_and_Chart_Vital,
            '_170302f2_Calculate_BMI' => $this->_170302f2_Calculate_BMI,
            '_170302f3_Plot_and_display_growth' => $this->_170302f3_Plot_and_display_growth,
            '_170302g_Smoking_status' => $this->_170302g_Smoking_status,
            '_170302h_Incorporate_lab_test_results' => $this->_170302h_Incorporate_lab_test_results,
            '_170302i_Generate_patient_lists' => $this->_170302i_Generate_patient_lists,
            '_170302j_Medication_Reconciliation' => $this->_170302j_Medication_Reconciliation,
            '_170302k_Submission_to_immun' => $this->_170302k_Submission_to_immun,
            '_170302l_Public_Health_Surveillance' => $this->_170302l_Public_Health_Surveillance,
            '_170302m_Patient_Specific_Education' => $this->_170302m_Patient_Specific_Education,
            '_170302n_Automated_measure_calc' => $this->_170302n_Automated_measure_calc,
            '_170302o_Access_Control' => $this->_170302o_Access_Control,
            '_170302p_Emergency_Access' => $this->_170302p_Emergency_Access,
            '_170302q_Automatic_logoff' => $this->_170302q_Automatic_logoff,
            '_170302r_Audit_Log' => $this->_170302r_Audit_Log,
            '_170302s_Integrity' => $this->_170302s_Integrity,
            '_170302t_Authentication' => $this->_170302t_Authentication,
            '_170302u_General_Encryption' => $this->_170302u_General_Encryption,
            '_170302v_Encryption_when_exchanging' => $this->_170302v_Encryption_when_exchanging,
            '_170302w_Accounting_of_disclosures' => $this->_170302w_Accounting_of_disclosures,
            '_170304a_Computerized_provider_OE' => $this->_170304a_Computerized_provider_OE,
            '_170304b_Electronic_Prescribing' => $this->_170304b_Electronic_Prescribing,
            '_170304c_Record_Demographics' => $this->_170304c_Record_Demographics,
            '_170304d_Patient_Reminders' => $this->_170304d_Patient_Reminders,
            '_170304e_Clinical_Decision_Support' => $this->_170304e_Clinical_Decision_Support,
            '_170304f_Electronic_Copy_of_Health' => $this->_170304f_Electronic_Copy_of_Health,
            '_170304g_Timely_Access' => $this->_170304g_Timely_Access,
            '_170304h_Clinical_Summaries' => $this->_170304h_Clinical_Summaries,
            '_170304i_Exchange_Clinical_Info' => $this->_170304i_Exchange_Clinical_Info,
            '_170304j_Calculate_and_Submit_Clinical' => $this->_170304j_Calculate_and_Submit_Clinical,
            '_170306a_Computerized_Provider_OE' => $this->_170306a_Computerized_Provider_OE,
            '_170306b_Record_Demographics' => $this->_170306b_Record_Demographics,
            '_170306c_Clinical_Decision_Support' => $this->_170306c_Clinical_Decision_Support,
            '_170306d_Electronic_copy_of_Health_Inf' => $this->_170306d_Electronic_copy_of_Health_Inf,
            '_170306d1_Electronic_copy_of_health' => $this->_170306d1_Electronic_copy_of_health,
            '_170306d2_Ecopy_of_health_info' => $this->_170306d2_Ecopy_of_health_info,
            '_170306e_Electronic_copy_of_discharge' => $this->_170306e_Electronic_copy_of_discharge,
            '_170306f_Exchange_Clinical_Info' => $this->_170306f_Exchange_Clinical_Info,
            '_170306g_Reportable_Lab_Results' => $this->_170306g_Reportable_Lab_Results,
            '_170306h_Advance_Directives' => $this->_170306h_Advance_Directives,
            '_170306i_Calculate_and_Submit_Clinical' => $this->_170306i_Calculate_and_Submit_Clinical,
            'NQF_0001A_Asthma_Assessment' => $this->NQF_0001A_Asthma_Assessment,
            'NQF_0002A_Pharyngitis_Testing' => $this->NQF_0002A_Pharyngitis_Testing,
            'NQF_0004A_Alcohol_and_Other_Drug_Depe' => $this->NQF_0004A_Alcohol_and_Other_Drug_Depe,
            'NQF_0012A_Prenatal_Care_HIV' => $this->NQF_0012A_Prenatal_Care_HIV,
            'NQF_0013A_Hypertension_Blood_Pressure' => $this->NQF_0013A_Hypertension_Blood_Pressure,
            'NQF_0014A_Prenatal_Care_Immune_Globul' => $this->NQF_0014A_Prenatal_Care_Immune_Globul,
            'NQF_0018A_Controlling_High_Blood_Pres' => $this->NQF_0018A_Controlling_High_Blood_Pres,
            'NQF_0024A_Weight_Assessment_for_Child' => $this->NQF_0024A_Weight_Assessment_for_Child,
            'NQF_0027A_Smoking_and_Tobacco_Use' => $this->NQF_0027A_Smoking_and_Tobacco_Use,
            'NQF_0028A_Preventive_Care_Screening' => $this->NQF_0028A_Preventive_Care_Screening,
            'NQF_0031A_Breast_Cancer_Screening' => $this->NQF_0031A_Breast_Cancer_Screening,
            'NQF_0032A_Cervical_Cancer_Screening' => $this->NQF_0032A_Cervical_Cancer_Screening,
            'NQF_0033A_Chlamydia_Screening_for_Wome' => $this->NQF_0033A_Chlamydia_Screening_for_Wome,
            'NQF_0034A_Colorectal_Cancer_Screening' => $this->NQF_0034A_Colorectal_Cancer_Screening,
            'NQF_0036A_Use_of_Medication_for_Asthma' => $this->NQF_0036A_Use_of_Medication_for_Asthma,
            'NQF_0038A_Child_Immunization_Status' => $this->NQF_0038A_Child_Immunization_Status,
            'NQF_0041A_Preventive_Care_Screening' => $this->NQF_0041A_Preventive_Care_Screening,
            'NQF_0043A_Pneomonia_Vaccination_Status' => $this->NQF_0043A_Pneomonia_Vaccination_Status,
            'NQF_0047A_Asthma_Pharmacologic_Therapy' => $this->NQF_0047A_Asthma_Pharmacologic_Therapy,
            'NQF_0052A_Low_Back_Pain_Imaging' => $this->NQF_0052A_Low_Back_Pain_Imaging,
            'NQF_0055A_Diabetes_Eye_Exam' => $this->NQF_0055A_Diabetes_Eye_Exam,
            'NQF_0056A_Diabetes_Foot_Exam' => $this->NQF_0056A_Diabetes_Foot_Exam,
            'NQF_0059A_Diabetes_Hemoglobin_A1c' => $this->NQF_0059A_Diabetes_Hemoglobin_A1c,
            'NQF_0061A_Diabetes_BP_Management' => $this->NQF_0061A_Diabetes_BP_Management,
            'NQF_0062A_Diabates_Urine_Screening' => $this->NQF_0062A_Diabates_Urine_Screening,
            'NQF_0064A_Diabetes_LDL' => $this->NQF_0064A_Diabetes_LDL,
            'NQF_0067A_Coronary_Artery_Disease' => $this->NQF_0067A_Coronary_Artery_Disease,
            'NQF_0068A_Vascular_Disease_Aspirin' => $this->NQF_0068A_Vascular_Disease_Aspirin,
            'NQF_0070A_CAD_BetaBlocker_Therapy' => $this->NQF_0070A_CAD_BetaBlocker_Therapy,
            'NQF_0073A_Vascular_Disease_BP_Mgmt' => $this->NQF_0073A_Vascular_Disease_BP_Mgmt,
            'NQF_0074A_Coronary_Artery_Disease' => $this->NQF_0074A_Coronary_Artery_Disease,
            'NQF_0075A_Vascular_Disease_LDL' => $this->NQF_0075A_Vascular_Disease_LDL,
            'NQF_0081A_Heart_Failure_ACE_Inhibitor' => $this->NQF_0081A_Heart_Failure_ACE_Inhibitor,
            'NQF_0083A_Heart_Failure_LVSD_Therapy' => $this->NQF_0083A_Heart_Failure_LVSD_Therapy,
            'NQF_0084A_Heart_Failure_Warfarin' => $this->NQF_0084A_Heart_Failure_Warfarin,
            'NQF_0086A_Primary_Open_Angle_Glaucoma' => $this->NQF_0086A_Primary_Open_Angle_Glaucoma,
            'NQF_0088A_Diabetic_Retinopathy_Docs' => $this->NQF_0088A_Diabetic_Retinopathy_Docs,
            'NQF_0089A_Diabetic_Retinopathy_Com' => $this->NQF_0089A_Diabetic_Retinopathy_Com,
            'NQF_0105A_Antidepressant_Med_Mgmt' => $this->NQF_0105A_Antidepressant_Med_Mgmt,
            'NQF_0371I_VTE_Prophylaxis' => $this->NQF_0371I_VTE_Prophylaxis,
            'NQF_0372I_VTE_Intensive_Care_Unit' => $this->NQF_0372I_VTE_Intensive_Care_Unit,
            'NQF_0373I_VTE_Anticoagulation_Overlap' => $this->NQF_0373I_VTE_Anticoagulation_Overlap,
            'NQF_0374I_VTE_Platelet_Monitoring' => $this->NQF_0374I_VTE_Platelet_Monitoring,
            'NQF_0375I_VTE_Discharge_Instructions' => $this->NQF_0375I_VTE_Discharge_Instructions,
            'NQF_0376I_VTE_Incidence_of_Preventabl' => $this->NQF_0376I_VTE_Incidence_of_Preventabl,
            'NQF_0385A_Oncology_Colon_Cancer' => $this->NQF_0385A_Oncology_Colon_Cancer,
            'NQF_0387A_Oncology_Brest_Cancer' => $this->NQF_0387A_Oncology_Brest_Cancer,
            'NQF_0389A_Prostate_Cancer_Bone_Scan' => $this->NQF_0389A_Prostate_Cancer_Bone_Scan,
            'NQF_0421A_Adult_Weight_Screening' => $this->NQF_0421A_Adult_Weight_Screening,
            'NQF_0435I_Stroke_Discharge' => $this->NQF_0435I_Stroke_Discharge,
            'NQF_0436I_Stroke_Anticoagulation' => $this->NQF_0436I_Stroke_Anticoagulation,
            'NQF_0437I_Stroke_Thrombolytic' => $this->NQF_0437I_Stroke_Thrombolytic,
            'NQF_0438I_Stroke_IschemicHemorrhagic' => $this->NQF_0438I_Stroke_IschemicHemorrhagic,
            'NQF_0439I_Stroke_Discharge_on_Statins' => $this->NQF_0439I_Stroke_Discharge_on_Statins,
            'NQF_0440I_Stroke_Stroke_Education' => $this->NQF_0440I_Stroke_Stroke_Education,
            'NQF_0441I_Stroke_Rehabilitation' => $this->NQF_0441I_Stroke_Rehabilitation,
            'NQF_0495I_ED_Median_Time' => $this->NQF_0495I_ED_Median_Time,
            'NQF_0497I_ED_Admission_Decision' => $this->NQF_0497I_ED_Admission_Decision,
            'NQF_0575A_Diabetes_Hemoglobin_A1c' => $this->NQF_0575A_Diabetes_Hemoglobin_A1c,
            '_170314a1_Computerized_provider_OE' => $this->_170314a1_Computerized_provider_OE,
            '_170314a2_Drugdrug_drugallergy' => $this->_170314a2_Drugdrug_drugallergy,
            '_170314a3_Demographics' => $this->_170314a3_Demographics,
            '_170314a4_Vital_signs_body_mass_ind' => $this->_170314a4_Vital_signs_body_mass_ind,
            '_170314a5_Problem_List' => $this->_170314a5_Problem_List,
            '_170314a6_Medication_List' => $this->_170314a6_Medication_List,
            '_170314a7_Medication_Allergy_List' => $this->_170314a7_Medication_Allergy_List,
            '_170314a8_Clinical_Decision_Support' => $this->_170314a8_Clinical_Decision_Support,
            '_170314a9_Electronic_Notes' => $this->_170314a9_Electronic_Notes,
            '_170314a10_DrugFormulary_Checks' => $this->_170314a10_DrugFormulary_Checks,
            '_170314a11_Smoking_Status' => $this->_170314a11_Smoking_Status,
            '_170314a12_Image_Results' => $this->_170314a12_Image_Results,
            '_170314a13_Family_Health_History' => $this->_170314a13_Family_Health_History,
            '_170314a14_Patient_List_Creation' => $this->_170314a14_Patient_List_Creation,
            '_170314a15_PatientSpecific_Educatio' => $this->_170314a15_PatientSpecific_Educatio,
            '_170314a16_Electronic_Medication_Adm' => $this->_170314a16_Electronic_Medication_Adm,
            '_170314a17_Advance_Directives' => $this->_170314a17_Advance_Directives,
            '_170314b1_Transitions_of_Care_rece' => $this->_170314b1_Transitions_of_Care_rece,
            '_170314b2_Transitions_of_Care_crea' => $this->_170314b2_Transitions_of_Care_crea,
            '_170314b3_Electronic_Prescribing' => $this->_170314b3_Electronic_Prescribing,
            '_170314b4_Clinical_Information_Recon' => $this->_170314b4_Clinical_Information_Recon,
            '_170314b5_Incorporate_Laboratory_Tes' => $this->_170314b5_Incorporate_Laboratory_Tes,
            '_170314b6_Transmission_of_Electronic' => $this->_170314b6_Transmission_of_Electronic,
            '_170314b7_Data_Portability' => $this->_170314b7_Data_Portability,
            '_170314c1_Clinical_Quality_Measures' => $this->_170314c1_Clinical_Quality_Measures,
            '_170314c2_Clinical_Quality_Measures' => $this->_170314c2_Clinical_Quality_Measures,
            '_170314c3_Clinical_Quality_Measures' => $this->_170314c3_Clinical_Quality_Measures,
            '_170314d1_Authentication_access_con' => $this->_170314d1_Authentication_access_con,
            '_170314d2_Auditable_Events_and_Tampe' => $this->_170314d2_Auditable_Events_and_Tampe,
            '_170314d3_Audit_Reports' => $this->_170314d3_Audit_Reports,
            '_170314d4_Amendments' => $this->_170314d4_Amendments,
            '_170314d5_Automatic_logoff' => $this->_170314d5_Automatic_logoff,
            '_170314d6_Emergency_access' => $this->_170314d6_Emergency_access,
            '_170314d7_EndUser_Device_Encryption' => $this->_170314d7_EndUser_Device_Encryption,
            '_170314d8_Integrity' => $this->_170314d8_Integrity,
            '_170314d9_Accounting_of_Disclosures' => $this->_170314d9_Accounting_of_Disclosures,
            'GGG__170314e1_View_Download_and_Transm' => $this->GGG__170314e1_View_Download_and_Transm,
            'GGG__170314e2_Clinical_Summary' => $this->GGG__170314e2_Clinical_Summary,
            'GGG__170314e3_Secure_Messaging' => $this->GGG__170314e3_Secure_Messaging,
            '_170314f1_Immunization_Information' => $this->_170314f1_Immunization_Information,
            '_170314f2_Transmission_to_Immunizati' => $this->_170314f2_Transmission_to_Immunizati,
            '_170314f3_Transmission_to_Public_Hea' => $this->_170314f3_Transmission_to_Public_Hea,
            '_170314f4_Transmission_of_Reportable' => $this->_170314f4_Transmission_of_Reportable,
            '_170314f5_Cancer_Case_Information' => $this->_170314f5_Cancer_Case_Information,
            '_170314f6_Transmission_to_Cancer_Reg' => $this->_170314f6_Transmission_to_Cancer_Reg,
            '_170314g1_Automated_Numerator_Record' => $this->_170314g1_Automated_Numerator_Record,
            '_170314g2_Automated_Measure_Calculat' => $this->_170314g2_Automated_Measure_Calculat,
            '_170314g3_SafetyEnhanced_Design' => $this->_170314g3_SafetyEnhanced_Design,
            '_170314g4_Quality_Management_System' => $this->_170314g4_Quality_Management_System,
        ]);

        $query->andFilterWhere(['like', 'STG_Certification_Certification_ID', $this->STG_Certification_Certification_ID])
            ->andFilterWhere(['like', 'ATCB_Certification_ID', $this->ATCB_Certification_ID])
            ->andFilterWhere(['like', 'Practice_Setting', $this->Practice_Setting])
            ->andFilterWhere(['like', 'Product_Classification', $this->Product_Classification])
            ->andFilterWhere(['like', 'Product', $this->Product])
            ->andFilterWhere(['like', 'Vendor', $this->Vendor])
            ->andFilterWhere(['like', 'Additional_Software', $this->Additional_Software])
            ->andFilterWhere(['like', 'Version', $this->Version])
            ->andFilterWhere(['like', 'Certification_Date', $this->Certification_Date])
            ->andFilterWhere(['like', 'CMS100_AMI_2_Aspirin_Prescribed_at_Dis', $this->CMS100_AMI_2_Aspirin_Prescribed_at_Dis])
            ->andFilterWhere(['like', 'CMS102_Stroke_10_Ischemic_or_hemorrhag', $this->CMS102_Stroke_10_Ischemic_or_hemorrhag])
            ->andFilterWhere(['like', 'CMS104_Stroke_2_Ischemic_stroke_Dis', $this->CMS104_Stroke_2_Ischemic_stroke_Dis])
            ->andFilterWhere(['like', 'CMS105_Stroke_6_Ischemic_stroke_Disc', $this->CMS105_Stroke_6_Ischemic_stroke_Disc])
            ->andFilterWhere(['like', 'CMS107_Stroke_8_Ischemic_or_hemorrhagi', $this->CMS107_Stroke_8_Ischemic_or_hemorrhagi])
            ->andFilterWhere(['like', 'CMS108_Venous_Thromboembolism_VTE_1', $this->CMS108_Venous_Thromboembolism_VTE_1])
            ->andFilterWhere(['like', 'CMS109_VTE_4_VTE_Patients_Receiving_Un', $this->CMS109_VTE_4_VTE_Patients_Receiving_Un])
            ->andFilterWhere(['like', 'CMS110_VTE_5_VTE_discharge_instruction', $this->CMS110_VTE_5_VTE_discharge_instruction])
            ->andFilterWhere(['like', 'CMS111_ED_2_Emergency_Department_Throu', $this->CMS111_ED_2_Emergency_Department_Throu])
            ->andFilterWhere(['like', 'CMS113_PC_01_Elective_Delivery_Prior_t', $this->CMS113_PC_01_Elective_Delivery_Prior_t])
            ->andFilterWhere(['like', 'CMS114_VTE_6_Incidence_of_potentially', $this->CMS114_VTE_6_Incidence_of_potentially])
            ->andFilterWhere(['like', 'CMS117_Childhood_Immunization_Status', $this->CMS117_Childhood_Immunization_Status])
            ->andFilterWhere(['like', 'CMS122_Diabetes_Hemoglobin_A1c_Poor', $this->CMS122_Diabetes_Hemoglobin_A1c_Poor])
            ->andFilterWhere(['like', 'CMS123_Diabetes_Foot_Exam', $this->CMS123_Diabetes_Foot_Exam])
            ->andFilterWhere(['like', 'CMS124_Cervical_Cancer_Screening', $this->CMS124_Cervical_Cancer_Screening])
            ->andFilterWhere(['like', 'CMS125_Breast_Cancer_Screening', $this->CMS125_Breast_Cancer_Screening])
            ->andFilterWhere(['like', 'CMS126_Use_of_Appropriate_Medications', $this->CMS126_Use_of_Appropriate_Medications])
            ->andFilterWhere(['like', 'CMS127_Pneumonia_Vaccination_Status_fo', $this->CMS127_Pneumonia_Vaccination_Status_fo])
            ->andFilterWhere(['like', 'CMS128_Anti_depressant_Medication_Mana', $this->CMS128_Anti_depressant_Medication_Mana])
            ->andFilterWhere(['like', 'CMS129_Prostate_Cancer_Avoidance_of', $this->CMS129_Prostate_Cancer_Avoidance_of])
            ->andFilterWhere(['like', 'CMS130_Colorectal_Cancer_Screening', $this->CMS130_Colorectal_Cancer_Screening])
            ->andFilterWhere(['like', 'CMS131_Diabetes_Eye_Exam', $this->CMS131_Diabetes_Eye_Exam])
            ->andFilterWhere(['like', 'CMS132_Cataracts_Complications_withi', $this->CMS132_Cataracts_Complications_withi])
            ->andFilterWhere(['like', 'CMS133_Cataracts_2040_or_Better_Vis', $this->CMS133_Cataracts_2040_or_Better_Vis])
            ->andFilterWhere(['like', 'CMS134_Diabetes_Urine_Protein_Screen', $this->CMS134_Diabetes_Urine_Protein_Screen])
            ->andFilterWhere(['like', 'CMS135_Heart_Failure_HF_Angiotensi', $this->CMS135_Heart_Failure_HF_Angiotensi])
            ->andFilterWhere(['like', 'CMS136_ADHD_Follow_Up_Care_for_Child', $this->CMS136_ADHD_Follow_Up_Care_for_Child])
            ->andFilterWhere(['like', 'CMS137_Initiation_and_Engagement_of_Al', $this->CMS137_Initiation_and_Engagement_of_Al])
            ->andFilterWhere(['like', 'CMS138_Preventive_Care_and_Screening', $this->CMS138_Preventive_Care_and_Screening])
            ->andFilterWhere(['like', 'CMS139_Screening_for_Future_Fall_Risk', $this->CMS139_Screening_for_Future_Fall_Risk])
            ->andFilterWhere(['like', 'CMS140_Breast_Cancer_Hormonal_Therapy', $this->CMS140_Breast_Cancer_Hormonal_Therapy])
            ->andFilterWhere(['like', 'CMS141_Colon_Cancer_Chemotherapy_for', $this->CMS141_Colon_Cancer_Chemotherapy_for])
            ->andFilterWhere(['like', 'CMS142_Diabetic_Retinopathy_Communic', $this->CMS142_Diabetic_Retinopathy_Communic])
            ->andFilterWhere(['like', 'CMS143_Primary_Open_Angle_Glaucoma_PO', $this->CMS143_Primary_Open_Angle_Glaucoma_PO])
            ->andFilterWhere(['like', 'CMS144_Heart_Failure_HF_Beta_Block', $this->CMS144_Heart_Failure_HF_Beta_Block])
            ->andFilterWhere(['like', 'CMS145_Coronary_Artery_Disease_CAD', $this->CMS145_Coronary_Artery_Disease_CAD])
            ->andFilterWhere(['like', 'CMS146_Appropriate_Testing_for_Childre', $this->CMS146_Appropriate_Testing_for_Childre])
            ->andFilterWhere(['like', 'CMS147_Preventative_Care_and_Screening', $this->CMS147_Preventative_Care_and_Screening])
            ->andFilterWhere(['like', 'CMS148_Hemoglobin_A1c_Test_for_Pediatr', $this->CMS148_Hemoglobin_A1c_Test_for_Pediatr])
            ->andFilterWhere(['like', 'CMS149_Dementia_Cognitive_Assessment', $this->CMS149_Dementia_Cognitive_Assessment])
            ->andFilterWhere(['like', 'CMS153_Chlamydia_Screening_for_Women', $this->CMS153_Chlamydia_Screening_for_Women])
            ->andFilterWhere(['like', 'CMS154_Appropriate_Treatment_for_Child', $this->CMS154_Appropriate_Treatment_for_Child])
            ->andFilterWhere(['like', 'CMS155_Weight_Assessment_and_Counselin', $this->CMS155_Weight_Assessment_and_Counselin])
            ->andFilterWhere(['like', 'CMS156_Use_of_High_Risk_Medications_in', $this->CMS156_Use_of_High_Risk_Medications_in])
            ->andFilterWhere(['like', 'CMS157_Oncology_Medical_and_Radiatio', $this->CMS157_Oncology_Medical_and_Radiatio])
            ->andFilterWhere(['like', 'CMS158_Pregnant_women_that_had_HBsAg_t', $this->CMS158_Pregnant_women_that_had_HBsAg_t])
            ->andFilterWhere(['like', 'CMS159_Depression_Remission_at_Twelve', $this->CMS159_Depression_Remission_at_Twelve])
            ->andFilterWhere(['like', 'CMS160_Depression_Utilization_of_the_P', $this->CMS160_Depression_Utilization_of_the_P])
            ->andFilterWhere(['like', 'CMS161_Major_Depressive_Disorder_MDD', $this->CMS161_Major_Depressive_Disorder_MDD])
            ->andFilterWhere(['like', 'CMS163_Diabetes_Low_Density_Lipoprot', $this->CMS163_Diabetes_Low_Density_Lipoprot])
            ->andFilterWhere(['like', 'CMS164_Ischemic_Vascular_Disease_IVD', $this->CMS164_Ischemic_Vascular_Disease_IVD])
            ->andFilterWhere(['like', 'CMS165_Controlling_High_Blood_Pressure', $this->CMS165_Controlling_High_Blood_Pressure])
            ->andFilterWhere(['like', 'CMS166_Use_of_Imaging_Studies_for_Low', $this->CMS166_Use_of_Imaging_Studies_for_Low])
            ->andFilterWhere(['like', 'CMS167_Diabetic_Retinopathy_Document', $this->CMS167_Diabetic_Retinopathy_Document])
            ->andFilterWhere(['like', 'CMS169_Bipolar_Disorder_and_Major_Depr', $this->CMS169_Bipolar_Disorder_and_Major_Depr])
            ->andFilterWhere(['like', 'CMS171_SCIP_INF_1_Prophylactic_Antibio', $this->CMS171_SCIP_INF_1_Prophylactic_Antibio])
            ->andFilterWhere(['like', 'CMS172_SCIP_INF_2_Prophylactic_Antibio', $this->CMS172_SCIP_INF_2_Prophylactic_Antibio])
            ->andFilterWhere(['like', 'CMS177_Child_and_Adolescent_Major_Depr', $this->CMS177_Child_and_Adolescent_Major_Depr])
            ->andFilterWhere(['like', 'CMS178_SCIP_INF_9_Urinary_catheter_re', $this->CMS178_SCIP_INF_9_Urinary_catheter_re])
            ->andFilterWhere(['like', 'CMS179_ADE_Prevention_and_Monitoring', $this->CMS179_ADE_Prevention_and_Monitoring])
            ->andFilterWhere(['like', 'CMS182_Ischemic_Vascular_Disease_IVD', $this->CMS182_Ischemic_Vascular_Disease_IVD])
            ->andFilterWhere(['like', 'CMS185_Healthy_Term_Newborn', $this->CMS185_Healthy_Term_Newborn])
            ->andFilterWhere(['like', 'CMS188_PN_6_Initial_Antibiotic_Select', $this->CMS188_PN_6_Initial_Antibiotic_Select])
            ->andFilterWhere(['like', 'CMS190_VTE_2_Intensive_Care_Unit_ICU', $this->CMS190_VTE_2_Intensive_Care_Unit_ICU])
            ->andFilterWhere(['like', 'CMS22_Preventive_Care_and_Screening', $this->CMS22_Preventive_Care_and_Screening])
            ->andFilterWhere(['like', 'CMS26V1_Home_Management_Plan_of_Care_H', $this->CMS26V1_Home_Management_Plan_of_Care_H])
            ->andFilterWhere(['like', 'CMS2_Preventive_Care_and_Screening_S', $this->CMS2_Preventive_Care_and_Screening_S])
            ->andFilterWhere(['like', 'CMS30_AMI_10_Statin_Prescribed_at_Disc', $this->CMS30_AMI_10_Statin_Prescribed_at_Disc])
            ->andFilterWhere(['like', 'CMS31_EHDI_1a_Hearing_screening_prio', $this->CMS31_EHDI_1a_Hearing_screening_prio])
            ->andFilterWhere(['like', 'CMS32_ED_3_Median_time_from_ED_arrival', $this->CMS32_ED_3_Median_time_from_ED_arrival])
            ->andFilterWhere(['like', 'CMS50_Closing_the_referral_loop_rece', $this->CMS50_Closing_the_referral_loop_rece])
            ->andFilterWhere(['like', 'CMS52_HIVAIDS_Pneumocystis_jiroveci', $this->CMS52_HIVAIDS_Pneumocystis_jiroveci])
            ->andFilterWhere(['like', 'CMS53_AMI_8a_Primary_PCI_Received_Wit', $this->CMS53_AMI_8a_Primary_PCI_Received_Wit])
            ->andFilterWhere(['like', 'CMS55_Emergency_Department_ED_1_Emer', $this->CMS55_Emergency_Department_ED_1_Emer])
            ->andFilterWhere(['like', 'CMS56_Functional_status_assessment_for', $this->CMS56_Functional_status_assessment_for])
            ->andFilterWhere(['like', 'CMS60_AMI_7a_Fibrinolytic_Therapy_Rec', $this->CMS60_AMI_7a_Fibrinolytic_Therapy_Rec])
            ->andFilterWhere(['like', 'CMS61_Preventive_Care_and_Screening', $this->CMS61_Preventive_Care_and_Screening])
            ->andFilterWhere(['like', 'CMS62_HIVAIDS_Medical_Visit', $this->CMS62_HIVAIDS_Medical_Visit])
            ->andFilterWhere(['like', 'CMS64_Preventive_Care_and_Screening', $this->CMS64_Preventive_Care_and_Screening])
            ->andFilterWhere(['like', 'CMS65_Hypertension_Improvement_in_bl', $this->CMS65_Hypertension_Improvement_in_bl])
            ->andFilterWhere(['like', 'CMS66_Functional_status_assessment_for', $this->CMS66_Functional_status_assessment_for])
            ->andFilterWhere(['like', 'CMS68_Documentation_of_Current_Medicat', $this->CMS68_Documentation_of_Current_Medicat])
            ->andFilterWhere(['like', 'CMS69_Preventive_Care_and_Screening_B', $this->CMS69_Preventive_Care_and_Screening_B])
            ->andFilterWhere(['like', 'CMS71_Stroke_3_Ischemic_stroke_Antic', $this->CMS71_Stroke_3_Ischemic_stroke_Antic])
            ->andFilterWhere(['like', 'CMS72_Stroke_5_Ischemic_stroke_Antit', $this->CMS72_Stroke_5_Ischemic_stroke_Antit])
            ->andFilterWhere(['like', 'CMS73_VTE_3_VTE_Patients_with_Anticoag', $this->CMS73_VTE_3_VTE_Patients_with_Anticoag])
            ->andFilterWhere(['like', 'CMS74_Primary_Caries_Prevention_Interv', $this->CMS74_Primary_Caries_Prevention_Interv])
            ->andFilterWhere(['like', 'CMS75_Children_who_have_dental_decay_o', $this->CMS75_Children_who_have_dental_decay_o])
            ->andFilterWhere(['like', 'CMS77_HIVAIDS_RNA_control_for_Patie', $this->CMS77_HIVAIDS_RNA_control_for_Patie])
            ->andFilterWhere(['like', 'CMS82_Maternal_depression_screening', $this->CMS82_Maternal_depression_screening])
            ->andFilterWhere(['like', 'CMS90_Functional_status_assessment_for', $this->CMS90_Functional_status_assessment_for])
            ->andFilterWhere(['like', 'CMS91_Stroke_4_Ischemic_stroke_Throm', $this->CMS91_Stroke_4_Ischemic_stroke_Throm])
            ->andFilterWhere(['like', 'CMS9V1_Exclusive_Breast_Milk_Feeding', $this->CMS9V1_Exclusive_Breast_Milk_Feeding])
            ->andFilterWhere(['like', 'Certifying_ATCB', $this->Certifying_ATCB]);

        return $dataProvider;
    }
}
