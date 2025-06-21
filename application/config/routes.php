<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'LoginController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['qnd'] = 'QueueNumberDispenser/QndController';
$route['qndPrio'] = 'QueueNumberDispenser/QndController/qndP';
$route['qndRegu'] = 'QueueNumberDispenser/QndController/qndR';
$route['addQueNumPrio'] = 'QueueNumberDispenser/QndController/addQuePrio';
$route['addQueNumRegu'] = 'QueueNumberDispenser/QndController/addQueRegu';
$route['jsonFetchRegu'] = 'QueueNumberDispenser/QndController/fetchJsonReguCont';
$route['jsonFetchPrio'] = 'QueueNumberDispenser/QndController/fetchJsonPrioCont';




$route['login']['GET'] = 'LoginController/index';
$route['login']['POST'] = 'LoginController/login';
$route['logout'] = 'LoginController/logout';

$route['register']['GET'] = 'RegisterController/index';
$route['register']['POST'] = 'RegisterController/register';






$route['fetch-pending-queues'] = 'QueueStepFlow/QsfController/autoDP';
$route['fetchQueues'] = 'QueueStepFlow/QsfController/autoDQ';




$route['qsfS3'] = 'QueueStepFlow/S3QsfController/index';
$route['s3fetchQueues'] = 'QueueStepFlow/S3QsfController/s3autoDQ';

$route['qsfS3W1Rou'] = 'QueueStepFlow/S3QsfController/qsfS3W1Cont';
$route['qsfS3W2Rou'] = 'QueueStepFlow/S3QsfController/qsfS3W2Cont';
$route['qsfS3W3Rou'] = 'QueueStepFlow/S3QsfController/qsfS3W3Cont';
$route['qsfS3W4Rou'] = 'QueueStepFlow/S3QsfController/qsfS3W4Cont';


$route['s3w1RegBtnRou'] = 'QueueStepFlow/S3QsfController/s3w1RegBtnCont';
$route['s3w2RegBtnRou'] = 'QueueStepFlow/S3QsfController/s3w2RegBtnCont';
$route['s3w3RegBtnRou'] = 'QueueStepFlow/S3QsfController/s3w3RegBtnCont';
$route['s3w4RegBtnRou'] = 'QueueStepFlow/S3QsfController/s3w4RegBtnCont';

$route['s3w1PrioBtnRou'] = 'QueueStepFlow/S3QsfController/s3w1PrioBtnCont';
$route['s3w2PrioBtnRou'] = 'QueueStepFlow/S3QsfController/s3w2PrioBtnCont';
$route['s3w3PrioBtnRou'] = 'QueueStepFlow/S3QsfController/s3w3PrioBtnCont';
$route['s3w4PrioBtnRou'] = 'QueueStepFlow/S3QsfController/s3w4PrioBtnCont';

$route['s3w1SkipRou'] = 'QueueStepFlow/S3QsfController/s3w1SkipCont';
$route['s3w2SkipRou'] = 'QueueStepFlow/S3QsfController/s3w2SkipCont';
$route['s3w3SkipRou'] = 'QueueStepFlow/S3QsfController/s3w3SkipCont';
$route['s3w4SkipRou'] = 'QueueStepFlow/S3QsfController/s3w4SkipCont';

$route['s3w1ProceedRou'] = 'QueueStepFlow/S3QsfController/s3w1ProceedCont';
$route['s3w2ProceedRou'] = 'QueueStepFlow/S3QsfController/s3w2ProceedCont';
$route['s3w3ProceedRou'] = 'QueueStepFlow/S3QsfController/s3w3ProceedCont';
$route['s3w4ProceedRou'] = 'QueueStepFlow/S3QsfController/s3w4ProceedCont';

$route['s3w1QueReguRou'] = 'QueueStepFlow/S3QsfController/jsonS3W1QueRegCont';
$route['s3w2QueReguRou'] = 'QueueStepFlow/S3QsfController/jsonS3W2QueRegCont';
$route['s3w3QueReguRou'] = 'QueueStepFlow/S3QsfController/jsonS3W3QueRegCont';
$route['s3w4QueReguRou'] = 'QueueStepFlow/S3QsfController/jsonS3W4QueRegCont';

$route['s3w1QuePrioRou'] = 'QueueStepFlow/S3QsfController/jsonS3W1QuePrioCont';
$route['s3w2QuePrioRou'] = 'QueueStepFlow/S3QsfController/jsonS3W2QuePrioCont';
$route['s3w3QuePrioRou'] = 'QueueStepFlow/S3QsfController/jsonS3W3QuePrioCont';
$route['s3w4QuePrioRou'] = 'QueueStepFlow/S3QsfController/jsonS3W4QuePrioCont';


$route['s3w1ServingRou'] = 'QueueStepFlow/S3QsfController/s3w1autoDSCont';
$route['s3w2ServingRou'] = 'QueueStepFlow/S3QsfController/s3w2autoDSCont';
$route['s3w3ServingRou'] = 'QueueStepFlow/S3QsfController/s3w3autoDSCont';
$route['s3w4ServingRou'] = 'QueueStepFlow/S3QsfController/s3w4autoDSCont';

$route['s3w1PendRou'] = 'QueueStepFlow/S3QsfController/jsonS3W1autoDPCont';
$route['s3w2PendRou'] = 'QueueStepFlow/S3QsfController/jsonS3W2autoDPCont';
$route['s3w3PendRou'] = 'QueueStepFlow/S3QsfController/jsonS3W3autoDPCont';
$route['s3w4PendRou'] = 'QueueStepFlow/S3QsfController/jsonS3W4autoDPCont';

$route['qsfS3W1UpdPend/(:num)'] = 'QueueStepFlow/S3QsfController/qsfS3W1UpdPendCont/$1';
$route['qsfS3W2UpdPend/(:num)'] = 'QueueStepFlow/S3QsfController/qsfS3W2UpdPendCont/$1';
$route['qsfS3W3UpdPend/(:num)'] = 'QueueStepFlow/S3QsfController/qsfS3W3UpdPendCont/$1';
$route['qsfS3W4UpdPend/(:num)'] = 'QueueStepFlow/S3QsfController/qsfS3W4UpdPendCont/$1';


$route['qsfS4W1Rou'] = 'QueueStepFlow/S4QsfController/qsfS4W1Cont';
$route['qsfS4W2Rou'] = 'QueueStepFlow/S4QsfController/qsfS4W2Cont';
$route['qsfS4W3Rou'] = 'QueueStepFlow/S4QsfController/qsfS4W3Cont';

$route['s4w1QueReguRou'] = 'QueueStepFlow/S4QsfController/jsonS4W1QueRegCont';
$route['s4w2QueReguRou'] = 'QueueStepFlow/S4QsfController/jsonS4W2QueRegCont';
$route['s4w3QueReguRou'] = 'QueueStepFlow/S4QsfController/jsonS4W3QueRegCont';

$route['s4w1QuePrioRou'] = 'QueueStepFlow/S4QsfController/jsonS4W1QuePrioCont';
$route['s4w2QuePrioRou'] = 'QueueStepFlow/S4QsfController/jsonS4W2QuePrioCont';
$route['s4w3QuePrioRou'] = 'QueueStepFlow/S4QsfController/jsonS4W3QuePrioCont';

$route['s4w1PendRou'] = 'QueueStepFlow/S4QsfController/jsonS4W1autoDPCont';
$route['s4w2PendRou'] = 'QueueStepFlow/S4QsfController/jsonS4W2autoDPCont';
$route['s4w3PendRou'] = 'QueueStepFlow/S4QsfController/jsonS4W3autoDPCont';

$route['qsfS4W1UpdPend/(:num)'] = 'QueueStepFlow/S4QsfController/qsfS4W1UpdPendCont/$1';
$route['qsfS4W2UpdPend/(:num)'] = 'QueueStepFlow/S4QsfController/qsfS4W2UpdPendCont/$1';
$route['qsfS4W3UpdPend/(:num)'] = 'QueueStepFlow/S4QsfController/qsfS4W3UpdPendCont/$1';


$route['s4w1ServingRou'] = 'QueueStepFlow/S4QsfController/s4w1autoDSCont';
$route['s4w2ServingRou'] = 'QueueStepFlow/S4QsfController/s4w2autoDSCont';
$route['s4w3ServingRou'] = 'QueueStepFlow/S4QsfController/s4w3autoDSCont';

$route['s4w1RegBtnRou'] = 'QueueStepFlow/S4QsfController/s4w1RegBtnCont';
$route['s4w2RegBtnRou'] = 'QueueStepFlow/S4QsfController/s4w2RegBtnCont';
$route['s4w3RegBtnRou'] = 'QueueStepFlow/S4QsfController/s4w3RegBtnCont';

$route['s4w1PrioBtnRou'] = 'QueueStepFlow/S4QsfController/s4w1PrioBtnCont';
$route['s4w2PrioBtnRou'] = 'QueueStepFlow/S4QsfController/s4w2PrioBtnCont';
$route['s4w3PrioBtnRou'] = 'QueueStepFlow/S4QsfController/s4w3PrioBtnCont';

$route['s4w1SkipRou'] = 'QueueStepFlow/S4QsfController/s4w1SkipCont';
$route['s4w2SkipRou'] = 'QueueStepFlow/S4QsfController/s4w2SkipCont';
$route['s4w3SkipRou'] = 'QueueStepFlow/S4QsfController/s4w3SkipCont';

$route['s4w1ProceedRou'] = 'QueueStepFlow/S4QsfController/s4w1ProceedCont';
$route['s4w2ProceedRou'] = 'QueueStepFlow/S4QsfController/s4w2ProceedCont';
$route['s4w3ProceedRou'] = 'QueueStepFlow/S4QsfController/s4w3ProceedCont';



/*-------------------- STEP 2 PRIORITY ROUTES --------------------*/
$route['qsfs2w1PrioRou'] = 'QueueStepFlow/QsfController/qsfs2w1PrioCont';
$route['qsfs2w2PrioRou'] = 'QueueStepFlow/QsfController/qsfs2w2PrioCont';
$route['s2w1QuePrioRou'] = 'QueueStepFlow/QsfController/s2w1QuePrioCont';
$route['s2w2QuePrioRou'] = 'QueueStepFlow/QsfController/s2w2QuePrioCont';
$route['s2w1PendingPrioRou'] = 'QueueStepFlow/QsfController/s2w1PendPrioCont';
$route['s2w2PendPrioRou'] = 'QueueStepFlow/QsfController/s2w2PendPrioCont';
$route['s2w1ServPrioRou'] = 'QueueStepFlow/QsfController/s2w1ServPrioCont';
$route['s2w2ServPrioRou'] = 'QueueStepFlow/QsfController/s2w2ServPrioCont';
$route['s2w1PrioBtnRou'] = 'QueueStepFlow/QsfController/s2w1PrioBtnCont';
$route['s2w2PrioBtnRou'] = 'QueueStepFlow/QsfController/s2w2PrioBtnCont';
$route['s2w1SkipPrioBtnRou'] = 'QueueStepFlow/QsfController/s2w1SkipPrioBtnCont';
$route['s2w2SkipPrioBtnRou'] = 'QueueStepFlow/QsfController/s2w2SkipPrioBtnCont';
$route['s2w1ProceedPrioBtnRou'] = 'QueueStepFlow/QsfController/s2w1ProceedPrioBtnCont';
$route['s2w2ProceedPrioBtnRou'] = 'QueueStepFlow/QsfController/s2w2ProceedPrioBtnCont';
$route['s2w1UpdPendPrioRou/(:num)'] = 'QueueStepFlow/QsfController/s2w1UpdPendPrioCont/$1';
$route['s2w2UpdPendPrioRou/(:num)'] = 'QueueStepFlow/QsfController/s2w2UpdatePendPrioCont/$1';

/*-------------------- STEP 2 REGULAR ROUTES --------------------*/
$route['qsfs2w1Regu'] = 'QueueStepFlow/QsfController/qsfs2w1ReguCont';
$route['qsfs2w2Regu'] = 'QueueStepFlow/QsfController/qsfs2w2ReguCont';
$route['s2w1QueReguRou'] = 'QueueStepFlow/QsfController/s2w1QueReguCont';
$route['s2w2QueReguRou'] = 'QueueStepFlow/QsfController/s2w2QueReguCont';
$route['s2w1PendReguRou'] = 'QueueStepFlow/QsfController/s2w1PendReguCont';
$route['s2w2PendReguRou'] = 'QueueStepFlow/QsfController/s2w2PendReguCont';
$route['s2w1ServReguRou'] = 'QueueStepFlow/QsfController/s2w1ServReguCont';
$route['s2w2ServReguRou'] = 'QueueStepFlow/QsfController/s2w2ServReguCont';
$route['s2w1ReguBtnRou'] = 'QueueStepFlow/QsfController/s2w1ReguBtnCont';
$route['s2w2ReguBtnRou'] = 'QueueStepFlow/QsfController/s2w2ReguBtnCont';
$route['s2w1SkipReguBtnRou'] = 'QueueStepFlow/QsfController/s2w1SkipReguBtnCont';
$route['s2w2SkipReguBtnRou'] = 'QueueStepFlow/QsfController/s2w2SkipReguBtnCont';
$route['s2w1ProceedReguBtnRou'] = 'QueueStepFlow/QsfController/s2w1ProceedReguBtnCont';
$route['s2w2ProceedReguBtnRou'] = 'QueueStepFlow/QsfController/s2w2ProceedReguBtnCont';
$route['s2w1UpdPendReguRou/(:num)'] = 'QueueStepFlow/QsfController/s2w1UpdPendReguCont/$1';
$route['s2w2UpdPendReguRou/(:num)'] = 'QueueStepFlow/QsfController/s2w2UpdPendReguCont/$1';




/*-------------------- PRIORITY DISPLAY ROUTES --------------------*/
$route['qsdPrio'] = 'QueueStatusDisplay/QsdController/qsdPrioCont';

$route['qsdPrioNew'] = 'QueueStatusDisplay/QsdController/qsdPrioNewCont';


$route['qsdS2W1PrioRou'] = 'QueueStatusDisplay/QsdController/s2w1PrioCont';
$route['qsdS2W2PrioRou'] = 'QueueStatusDisplay/QsdController/s2w2PrioCont';
$route['qsdS3W1PrioRou'] = 'QueueStatusDisplay/QsdController/s3w1PrioCont';
$route['qsdS3W2PrioRou'] = 'QueueStatusDisplay/QsdController/s3w2PrioCont';
$route['qsdS3W3PrioRou'] = 'QueueStatusDisplay/QsdController/s3w3PrioCont';
$route['qsdS3W4PrioRou'] = 'QueueStatusDisplay/QsdController/s3w4PrioCont';
$route['qsdS4W1PrioRou'] = 'QueueStatusDisplay/QsdController/s4w1PrioCont';
$route['qsdS4W2PrioRou'] = 'QueueStatusDisplay/QsdController/s4w2PrioCont';
$route['qsdS4W3PrioRou'] = 'QueueStatusDisplay/QsdController/s4w3PrioCont';


/*-------------------- REGULAR DISPLAY ROUTES --------------------*/
$route['qsdRegu'] = 'QueueStatusDisplay/QsdController/qsdRegCont';
$route['qsdS2W1RegRou'] = 'QueueStatusDisplay/QsdController/s2w1RegCont';
$route['qsdS2W2RegRou'] = 'QueueStatusDisplay/QsdController/s2w2RegCont';
$route['qsdS3W1RegRou'] = 'QueueStatusDisplay/QsdController/s3w1RegCont';
$route['qsdS3W2RegRou'] = 'QueueStatusDisplay/QsdController/s3w2RegCont';
$route['qsdS3W3RegRou'] = 'QueueStatusDisplay/QsdController/s3w3RegCont';
$route['qsdS3W4RegRou'] = 'QueueStatusDisplay/QsdController/s3w4RegCont';
$route['qsdS4W1RegRou'] = 'QueueStatusDisplay/QsdController/s4w1RegCont';
$route['qsdS4W2RegRou'] = 'QueueStatusDisplay/QsdController/s4w2RegCont';
$route['qsdS4W3RegRou'] = 'QueueStatusDisplay/QsdController/s4w3RegCont';

$route['qsdFooterMarquee'] = 'QueueStatusDisplay/QsdController/qsdFM';


/*-------------------- ADMIN ROUTES --------------------*/
$route['admin'] = 'Admin/AdminController/adminCont';
$route['accounts'] = 'Admin/AdminController/accCont';
$route['accountReq'] = 'Admin/AdminController/accReqCont';
$route['display'] = 'Admin/AdminController/displayCont';
$route['jsonFetchAcc'] = 'Admin/AdminController/fetchAccCont';
$route['jsonFetchAccReq'] = 'Admin/AdminController/fetchAccReqCont';
$route['approveUserRequest'] = 'Admin/AdminController/approveUserReqCont';
$route['accReqAddPass']['POST'] = 'RegisterController/accReqAddPass';
$route['asdasddsa']['POST'] = 'Admin/AdminController/asdasddsaCont';
$route['cadfdfdf']['POST'] = 'Admin/AdminController/cadfdfdfCont';
$route['videos'] = 'video/videocontroller/upload';


$route['userLogged'] = 'QueueStepFlow/QsfController/userLogged';
$route['callBtn'] = 'QueueStepFlow/QsfController/nextCall';
$route['hgu'] = 'QueueStepFlow/QsfController/headerGetUser';


// $route['resetCallStatByQueueNum'] = 'QueueStepFlow/QsfController/hiddednresetCallStatByQueueNum';
$route['s2w1CallPrioRou'] = 'QueueStepFlow/QsfController/s2w1CallPrioCont';
$route['s2w2CallPrioRou'] = 'QueueStepFlow/QsfController/s2w2CallPrioCont';
$route['s3w1CallBtnRou'] = 'QueueStepFlow/S3QsfController/s3w1CallBtnCont';
$route['s3w2CallBtnRou'] = 'QueueStepFlow/S3QsfController/s3w2CallBtnCont';
$route['s3w3CallBtnRou'] = 'QueueStepFlow/S3QsfController/s3w3CallBtnCont';
$route['s3w4CallBtnRou'] = 'QueueStepFlow/S3QsfController/s3w4CallBtnCont';
$route['s4w1CallBtnRou'] = 'QueueStepFlow/S4QsfController/s4w1CallBtnCont';
$route['s4w2CallBtnRou'] = 'QueueStepFlow/S4QsfController/s4w2CallBtnCont';
$route['s4w3CallBtnRou'] = 'QueueStepFlow/S4QsfController/s4w3CallBtnCont';

// FOR FETCHING VALUES FROM queue_num IN tbl_transactions
$route['hiddenQsdS2W1PrioRou'] = 'QueueStatusDisplay/QsdController/hiddenS2w1PrioCont';
$route['hiddenQsdS2W2PrioRou'] = 'QueueStatusDisplay/QsdController/hiddenS2w2PrioCont';
$route['hiddenQsdS3W1Rou'] = 'QueueStatusDisplay/QsdController/hiddenS3w1Cont';
$route['hiddenQsdS3W2Rou'] = 'QueueStatusDisplay/QsdController/hiddenS3w2Cont';
$route['hiddenQsdS3W3Rou'] = 'QueueStatusDisplay/QsdController/hiddenS3w3Cont';
$route['hiddenQsdS3W4Rou'] = 'QueueStatusDisplay/QsdController/hiddenS3w4Cont';
$route['hiddenQsdS4W1Rou'] = 'QueueStatusDisplay/QsdController/hiddenS4w1Cont';
$route['hiddenQsdS4W2Rou'] = 'QueueStatusDisplay/QsdController/hiddenS4w2Cont';
$route['hiddenQsdS4W3Rou'] = 'QueueStatusDisplay/QsdController/hiddenS4w3Cont';

// FOR FETCHING call_num VALUE
$route['calls2w1Rou'] = 'QueueStatusDisplay/QsdController/calls2w1Cont';
$route['calls2w2Rou'] = 'QueueStatusDisplay/QsdController/calls2w2Cont';
$route['calls3w1Rou'] = 'QueueStatusDisplay/QsdController/calls3w1Cont';
$route['calls3w2Rou'] = 'QueueStatusDisplay/QsdController/calls3w2Cont';
$route['calls3w3Rou'] = 'QueueStatusDisplay/QsdController/calls3w3Cont';
$route['calls3w4Rou'] = 'QueueStatusDisplay/QsdController/calls3w4Cont';
$route['calls4w1Rou'] = 'QueueStatusDisplay/QsdController/calls4w1Cont';
$route['calls4w2Rou'] = 'QueueStatusDisplay/QsdController/calls4w2Cont';
$route['calls4w3Rou'] = 'QueueStatusDisplay/QsdController/calls4w3Cont';


// $route['hiddenQsdS3W2PrioRou'] = 'QueueStatusDisplay/QsdController/hiddenS3w2PrioCont';
// $route['hiddenQsdS3W3PrioRou'] = 'QueueStatusDisplay/QsdController/hiddenS3w3PrioCont';
// $route['hiddenQsdS3W4PrioRou'] = 'QueueStatusDisplay/QsdController/hiddenS3w4PrioCont';
// $route['hiddenQsdS4W1PrioRou'] = 'QueueStatusDisplay/QsdController/hiddenS4w1PrioCont';
// $route['hiddenQsdS4W2PrioRou'] = 'QueueStatusDisplay/QsdController/hiddenS4w2PrioCont';
// $route['hiddenQsdS4W3PrioRou'] = 'QueueStatusDisplay/QsdController/hiddenS4w3PrioCont';



// $route['updateQsdCallStat'] = 'QueueStatusDisplay/QsdController/updateQsdCallStat';
