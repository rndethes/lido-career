<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'CandidateLogin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;


$route['pengaturan-landing-page'] = 'PengaturanLandingPage';

$route['pengaturan-timeline'] = 'PengaturanTimeline';
$route['pengaturan-timeline/batch'] = 'PengaturanTimeline/batch';
$route['pengaturan-timeline/batch/setting/(\d+)'] = 'PengaturanTimeline/setting/$1';
$route['pengaturan-timeline/batch/monitor/(\d+)'] = 'PengaturanTimeline/monitor/$1';
$route['pengaturan-timeline/batch/(\d+)/get_available_job'] = 'PengaturanTimeline/batch_job_get_job/$1';
$route['pengaturan-timeline/batch/(\d+)/add_job'] = 'PengaturanTimeline/batch_job_add_job/$1';
$route['pengaturan-timeline/batch/(\d+)/del_job'] = 'PengaturanTimeline/batch_job_del_job/$1';
$route['pengaturan-timeline/batch/(\d+)/timeline-job/(\d+)'] = 'PengaturanTimeline/batch_job_timeline_job/$1/$2';
$route['pengaturan-timeline/batch/load-table-data-candidate-ajax'] = 'PengaturanTimeline/batch_timeline_candidate_ajax';
$route['pengaturan-timeline/batch/apply-or-reject-candidate'] = 'PengaturanTimeline/batch_apply_or_reject_candidate';
$route['pengaturan-timeline/batch/timeline/save'] = 'PengaturanTimeline/save_timeline';
$route['pengaturan-timeline/remove/(\d+)'] = 'PengaturanTimeline/remove/$1';
$route['pengaturan-timeline/batch/timeline/save_batch'] = 'PengaturanTimeline/save_timeline_batch';
$route['pengaturan-timeline/transfer-timeline/(\d+)'] = 'PengaturanTimeline/transfer_timeline/$1';
$route['pengaturan-timeline/bakso-control/mulltiple'] = 'PengaturanTimeline/bakso_control_multipple';

$route['candidatedashboard'] = 'CandidateDashboard';
$route['candidatelogin'] = 'CandidateLogin/index';
$route['candidatelogin/(.*)'] = 'CandidateLogin/$1';
$route['candidatejob/(.*)'] = 'CandidateJob/$1';
$route['candidatecontact'] = 'CandidateContact/index';
$route['candidatecontact/(.*)'] = 'CandidateContact/$1';

$route['candidatejob'] = 'CandidateJob/index';
$route['candidatejob/(.*)'] = 'CandidateJob/$1';
$route['candidatedashboard/(:any)'] = 'CandidateDashboard/$1';

$route['candidate-biodata'] = 'CandidateBiodata/index';
$route['candidate-biodata/update-biodata'] = 'CandidateBiodata/update_biodata';
$route['candidate-biodata/my-experience-as-json'] = 'CandidateBiodata/my_experience_as_json';
$route['candidate-biodata/my-file-as-json'] = 'CandidateBiodata/my_file_as_json';
$route['candidate-biodata/my-profile-as-json'] = 'CandidateBiodata/my_profile_as_json';
$route['candidate-biodata/update-biodata/save-data-diri'] = 'CandidateBiodata/save_data_diri';
$route['candidate-biodata/update-biodata/save-data-pendidikan'] = 'CandidateBiodata/save_data_pendidikan';
$route['candidate-biodata/update-biodata/save-data-alamat'] = 'CandidateBiodata/save_data_alamat';
$route['candidate-biodata/update-biodata/save-data-pengalaman'] = 'CandidateBiodata/save_data_pengalaman';
$route['candidate-biodata/update-biodata/delete-experience/(\d+)'] = 'CandidateBiodata/delete_experience/$1';
$route['candidate-biodata/update-biodata/save-data-pendukung'] = 'CandidateBiodata/save_data_pendukung';
$route['candidate-biodata/update-biodata/delete-data-pendukung'] = 'CandidateBiodata/delete_data_pendukung';
$route['candidate-biodata/update-biodata/save-data-profile'] = 'CandidateBiodata/save_data_profile';
$route['candidate-biodata/change-password'] = 'CandidateBiodata/change_password';

$route['candidate-api/my-experience-as-json'] = 'KandidatApi/my_experience_as_json';
$route['candidate-api/my-file-as-json'] = 'KandidatApi/my_file_as_json';
$route['candidate-api/my-profile-as-json'] = 'KandidatApi/my_profile_as_json';
$route['candidate-api/update-biodata/save-data-diri'] = 'KandidatApi/save_data_diri';
$route['candidate-api/update-biodata/save-data-pendidikan'] = 'KandidatApi/save_data_pendidikan';
$route['candidate-api/update-biodata/save-data-alamat'] = 'KandidatApi/save_data_alamat';
$route['candidate-api/update-biodata/save-data-pengalaman'] = 'KandidatApi/save_data_pengalaman';
$route['candidate-api/update-biodata/delete-experience/(\d+)'] = 'KandidatApi/delete_experience/$1';
$route['candidate-api/update-biodata/save-data-pendukung'] = 'KandidatApi/save_data_pendukung';
$route['candidate-api/update-biodata/delete-data-pendukung'] = 'KandidatApi/delete_data_pendukung';
$route['candidate-api/update-biodata/save-data-profile'] = 'KandidatApi/save_data_profile';

$route['candidatepengumuman'] = 'CandidatePengumuman/index';
$route['candidatepengumuman/(.*)'] = 'CandidatePengumuman/$1';

$route['notification/save-token'] = 'Notification/save_token';
$route['notification/send-notif'] = 'Notification/send_notif';
$route['notification/send-email'] = 'Notification/send_email';

$route['candidate-notification'] = 'CandidateNotification/index';
$route['candidate-notification/read/(:num)'] = 'CandidateNotification/read/$1';
