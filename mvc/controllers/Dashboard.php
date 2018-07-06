<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Admin_Controller {
/*
| -----------------------------------------------------
| PRODUCT NAME: 	INILABS SCHOOL MANAGEMENT SYSTEM
| -----------------------------------------------------
| AUTHOR:			INILABS TEAM
| -----------------------------------------------------
| EMAIL:			info@inilabs.net
| -----------------------------------------------------
| COPYRIGHT:		RESERVED BY INILABS IT
| -----------------------------------------------------
| WEBSITE:			http://inilabs.net
| -----------------------------------------------------
*/

	function __construct() {
		parent::__construct();
		$this->load->model('systemadmin_m');
		$this->load->model("dashboard_m");
		$this->load->model("setting_m");
		$this->load->model("notice_m");
		$this->load->model("student_m");
		$this->load->model("classes_m");
		$this->load->model("teacher_m");
		$this->load->model("parents_m");
		$this->load->model("subject_m");
		$this->load->model('event_m');
		$this->load->model('question_group_m');
		$this->load->model('question_level_m');
		$this->load->model('question_bank_m');
		$this->load->model('online_exam_m');
		$this->load->model('studentgroup_m');

		$language = $this->session->userdata('lang');
		$this->lang->load('dashboard', $language);
	}

	public function index() {
		$this->data['headerassets'] = array(
			'js' => array(
				'assets/highcharts/highcharts.js',
				'assets/highcharts/highcharts-more.js',
				'assets/highcharts/data.js',
				'assets/highcharts/drilldown.js',
				'assets/highcharts/exporting.js'
			)
		);


		$schoolyearID = $this->session->userdata('defaultschoolyearID');

		$students 		= $this->student_m->get_order_by_student(array('schoolyearID' => $schoolyearID));
		$classes		= pluck($this->classes_m->get_classes(), 'obj', 'classesID');
		$teachers		= $this->teacher_m->get_teacher();
		$parents		= $this->parents_m->get_parents();
		$events			= $this->event_m->get_event();
		$questiongroup 	= $this->question_group_m->get_question_group();
		$questionlevel 	= $this->question_level_m->get_question_level();
		$questionbank 	= $this->question_bank_m->get_question_bank();
		$onlineexam 	= $this->online_exam_m->get_online_exam();
		$notice 		= $this->notice_m->get_notice();
		$studentgroup	= $this->studentgroup_m->get_studentgroup();
		$allmenu 		= pluck($this->menu_m->get_order_by_menu(), 'icon', 'link');
		$allmenulang 	= pluck($this->menu_m->get_order_by_menu(), 'menuName', 'link');

		if($this->session->userdata('usertypeID') == 3) {
			$getLoginStudent = $this->student_m->get_single_student(array('username' => $this->session->userdata('username')));
			if(count($getLoginStudent)) {
				$subjects	= $this->subject_m->get_order_by_subject(array('classesID' => $getLoginStudent->classesID));
			} else {
				$subjects = array();
			}
		} else {
			$subjects	= $this->subject_m->get_subject();
		}

		$deshboardTopWidgetUserTypeOrder = $this->session->userdata('master_permission_set');

		$this->data['dashboardWidget']['students'] 			= count($students);
		$this->data['dashboardWidget']['classes']  			= count($classes);
		$this->data['dashboardWidget']['teachers'] 			= count($teachers);
		$this->data['dashboardWidget']['parents'] 			= count($parents);
		$this->data['dashboardWidget']['subjects'] 			= count($subjects);
		$this->data['dashboardWidget']['questiongroup'] 	= count($questiongroup);
		$this->data['dashboardWidget']['questionlevel'] 	= count($questionlevel);
		$this->data['dashboardWidget']['questionbank'] 		= count($questionbank);
		$this->data['dashboardWidget']['onlineexam'] 		= count($onlineexam);
		$this->data['dashboardWidget']['events'] 			= count($events);
		$this->data['dashboardWidget']['notice']			= count($notice);
		$this->data['dashboardWidget']['studentgroup']      = count($studentgroup);
		$this->data['dashboardWidget']['allmenu'] 			= $allmenu;
		$this->data['dashboardWidget']['allmenulang'] 		= $allmenulang;

		$currentDate = strtotime(date('Y-m-d H:i:s'));
		$previousSevenDate = strtotime(date('Y-m-d 00:00:00', strtotime('-7 days')));

		$visitors = $this->loginlog_m->get_order_by_loginlog(array('login <= ' => $currentDate, 'login >= ' => $previousSevenDate));
		$showChartVisitor = array();
		foreach ($visitors as $visitor) {
			$date = date('j M',$visitor->login);
			if(!isset($showChartVisitor[$date])) {
				$showChartVisitor[$date] = 0;
			}
			$showChartVisitor[$date]++;
		}

		$this->data['showChartVisitor'] = $showChartVisitor;


		$userTypeID = $this->session->userdata('usertypeID');
		$userName = $this->session->userdata('username');
		$this->data['usertype'] = $this->session->userdata('usertype');

		if($userTypeID == 1) {
			$this->data['user'] = $this->systemadmin_m->get_single_systemadmin(array('username'  => $userName));
		} elseif($userTypeID == 2) {
			$this->data['user'] = $this->teacher_m->get_single_teacher(array('username'  => $userName));
		}  elseif($userTypeID == 3) {
			$this->data['user'] = $this->student_m->get_single_student(array('username'  => $userName));
		} elseif($userTypeID == 4) {
			$this->data['user'] = $this->parents_m->get_single_parents(array('username'  => $userName));
		} else {
			$this->data['user'] = $this->user_m->get_single_user(array('username'  => $userName));
		}

		$this->data['notices'] = $this->notice_m->get_order_by_notice(array('schoolyearID' => $schoolyearID));
		$this->data['events'] = $this->event_m->get_event();


		$this->data["subview"] = "dashboard/index";
		$this->load->view('_layout_main', $this->data);
	}
}

