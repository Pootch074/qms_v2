<?php
defined('BASEPATH') or exit('No direct script access allowed');

//$route['default_controller'] = 'Login';application\controllers\Auth\LoginController.php
//$route['default_controller'] = 'Auth/LoginController/index';
$route['default_controller'] = 'LoginController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//$route['qnd'] = 'PacdController/index';
$route['qnd'] = 'QueueNumberDispenser/QndController';
$route['qndPrio'] = 'QueueNumberDispenser/QndController/qndP';
$route['qndRegu'] = 'QueueNumberDispenser/QndController/qndR';
//$route['qndPrioFetch'] = 'QueueNumberDispenser/QndController/fetchTranPrio';
//$route['qndReguFetch'] = 'QueueNumberDispenser/QndController/fetchTranRegu';
$route['addQueNumPrio'] = 'QueueNumberDispenser/QndController/addQuePrio';
$route['addQueNumRegu'] = 'QueueNumberDispenser/QndController/addQueRegu';
$route['jsonFetchRegu'] = 'QueueNumberDispenser/QndController/fetchJsonReguCont';
$route['jsonFetchPrio'] = 'QueueNumberDispenser/QndController/fetchJsonPrioCont';


$route['pacdAdmin'] = 'PacdController/admin';
//$route['pacdDivisions'] = 'PacdController/pacdDivisions';

$route['createCat'] = 'PacdController/createCat';
$route['createDiv'] = 'PacdController/createDiv';
$route['createSec'] = 'PacdController/createSec';
$route['createServ'] = 'PacdController/createServe';

//INSERT VALUES IN PACD
$route['pacdCreateCatFunc'] = 'PacdController/createCatFunc';
$route['pacdCreateDivFunc'] = 'PacdController/createDivFunc';
$route['pacdCreateSecFunc'] = 'PacdController/createSecFunc';
$route['pacdCreateServFunc'] = 'PacdController/createServFunc';

//DELETE VALUES IN PACD
$route['pacdDeleteCatFunc/(:num)'] = 'PacdController/deleteCatFunc/$1';
$route['pacdDeleteDivFunc/(:num)'] = 'PacdController/deleteDivFunc/$1';
$route['pacdDeleteSecFunc/(:num)'] = 'PacdController/deleteSecFunc/$1';
$route['pacdDeleteServFunc/(:num)'] = 'PacdController/deleteServFunc/$1';

//UPDATE VALUES IN PACD
$route['pacdEditCatFunc'] = 'PacdController/editCatFunc';

$route['login']['GET'] = 'LoginController/index';
$route['login']['POST'] = 'LoginController/login';
$route['logout'] = 'LoginController/logout';

$route['register']['GET'] = 'RegisterController/index';
$route['register']['POST'] = 'RegisterController/register';

$route['fetch_sections'] = 'DivisionController/fetch_sections';

$route['displayTicket'] = 'DivisionController/displayTicket';





$route['fetch-pending-queues'] = 'QueueStepFlow/QsfController/autoDP';

$route['fetchQueues'] = 'QueueStepFlow/QsfController/autoDQ';



//$route['s3fetchPrioQueue'] = 'QueueStepFlow/S3QsfController/s3autoDQPriority';
//$route['s3fetchReguQueue'] = 'QueueStepFlow/S3QsfController/s3autoDQRegular';
//$route['s3fetchReguQueue'] = 'QueueStepFlow/S3QsfController/jsonS3autoDQRegular';
//$route['s3fetchPrioQueue'] = 'QueueStepFlow/S3QsfController/jsonS3autoDQPriority';
//$route['s3fetchServing'] = 'QueueStepFlow/S3QsfController/s3autoDS';
//$route['s3fetchPending'] = 'QueueStepFlow/S3QsfController/jsonS3autoDP';
$route['qsfS3'] = 'QueueStepFlow/S3QsfController/index';
$route['qsfS3W1'] = 'QueueStepFlow/S3QsfController/qsfS3W1Cont';
$route['qsfS3W2'] = 'QueueStepFlow/S3QsfController/qsfS3W2Cont';
$route['qsfS3W3'] = 'QueueStepFlow/S3QsfController/qsfS3W3Cont';
$route['s3fetchQueues'] = 'QueueStepFlow/S3QsfController/s3autoDQ';
$route['s3w1RegBtnRou'] = 'QueueStepFlow/S3QsfController/s3w1RegBtnCont';
$route['s3w2RegBtnRou'] = 'QueueStepFlow/S3QsfController/s3w2RegBtnCont';
$route['s3w1PrioBtnRou'] = 'QueueStepFlow/S3QsfController/s3w1PrioBtnCont';
$route['s3w2PrioBtnRou'] = 'QueueStepFlow/S3QsfController/s3w2PrioBtnCont';
$route['s3w1SkipRou'] = 'QueueStepFlow/S3QsfController/s3w1SkipCont';
$route['s3w2SkipRou'] = 'QueueStepFlow/S3QsfController/s3w2SkipCont';
$route['s3w1ProceedRou'] = 'QueueStepFlow/S3QsfController/s3w1ProceedCont';
$route['s3w2ProceedRou'] = 'QueueStepFlow/S3QsfController/s3w2ProceedCont';
$route['s3w1QueReguRou'] = 'QueueStepFlow/S3QsfController/jsonS3W1QueRegCont';
$route['s3w3QueReguRou'] = 'QueueStepFlow/S3QsfController/jsonS3W3QueRegCont';
$route['s3w2QueReguRou'] = 'QueueStepFlow/S3QsfController/jsonS3W2QueRegCont';
$route['s3w1QuePrioRou'] = 'QueueStepFlow/S3QsfController/jsonS3W1QuePrioCont';
$route['s3w3QuePrioRou'] = 'QueueStepFlow/S3QsfController/jsonS3W3QuePrioCont';
$route['s3w2QuePrioRou'] = 'QueueStepFlow/S3QsfController/jsonS3W2QuePrioCont';
$route['s3w1ServingRou'] = 'QueueStepFlow/S3QsfController/s3w1autoDSCont';
$route['s3w3ServingRou'] = 'QueueStepFlow/S3QsfController/s3w3autoDSCont';
$route['s3w2ServingRou'] = 'QueueStepFlow/S3QsfController/s3w2autoDSCont';
$route['s3w1PendRou'] = 'QueueStepFlow/S3QsfController/jsonS3W1autoDPCont';
$route['s3w3PendRou'] = 'QueueStepFlow/S3QsfController/jsonS3W3autoDPCont';
$route['s3w2PendRou'] = 'QueueStepFlow/S3QsfController/jsonS3W2autoDPCont';
$route['qsfS3UpdPend/(:num)'] = 'QueueStepFlow/S3QsfController/qsfS3UpdPendCont/$1';


$route['qsfS4'] = 'QueueStepFlow/S4QsfController/index';
$route['s4fetchReguQueue'] = 'QueueStepFlow/S4QsfController/jsonS4autoDQRegular';
$route['s4fetchPrioQueue'] = 'QueueStepFlow/S4QsfController/jsonS4autoDQPriority';
$route['s4fetchPending'] = 'QueueStepFlow/S4QsfController/jsonS4autoDP';
$route['s4fetchServing'] = 'QueueStepFlow/S4QsfController/s4autoDS';

$route['s4nextRegularBtn'] = 'QueueStepFlow/S4QsfController/s4nextRegular';
$route['s4nextPriorityBtn'] = 'QueueStepFlow/S4QsfController/s4nextPriority';
$route['s4skipBtn'] = 'QueueStepFlow/S4QsfController/s4skip';
$route['s4proceedBtn'] = 'QueueStepFlow/S4QsfController/s4proceed';

// STEP 2 PRIORITY
$route['qsfS2Prio'] = 'QueueStepFlow/QsfController/qsfS2P';

$route['s2QueuesPrioRou'] = 'QueueStepFlow/QsfController/s2autoDQPrioCont';
$route['s2PendingPrioRou'] = 'QueueStepFlow/QsfController/s2autoDPPrioCont';
$route['s2ServingPrioRou'] = 'QueueStepFlow/QsfController/s2autoDSPrioCont';

$route['s2PrioBtnRou'] = 'QueueStepFlow/QsfController/s2PrioBtnCont';
$route['s2SkipPrioBtnRou'] = 'QueueStepFlow/QsfController/s2SkipPrioBtnCont';
$route['s2ProceedPrioBtnRou'] = 'QueueStepFlow/QsfController/s2ProceedPrioBtnCont';
$route['s2UpdatePendingPrioRou/(:num)'] = 'QueueStepFlow/QsfController/s2UpdatePendingPrioCont/$1';


// STEP 2 REGULAR
$route['qsfS2Regu'] = 'QueueStepFlow/QsfController/qsfS2R';

$route['s2QueuesReguRou'] = 'QueueStepFlow/QsfController/s2autoDQReguCont';
$route['s2PendingReguRou'] = 'QueueStepFlow/QsfController/s2autoDPReguCont';
$route['s2ServingReguRou'] = 'QueueStepFlow/QsfController/s2autoDSReguCont';

$route['s2ReguBtnRou'] = 'QueueStepFlow/QsfController/s2ReguBtnCont';
$route['s2SkipReguBtnRou'] = 'QueueStepFlow/QsfController/s2SkipReguBtnCont';
$route['s2ProceedReguBtnRou'] = 'QueueStepFlow/QsfController/s2ProceedReguBtnCont';
$route['s2UpdatePendingReguRou/(:num)'] = 'QueueStepFlow/QsfController/s2UpdatePendingReguCont/$1';

$route['callBtn'] = 'QueueStepFlow/QsfController/nextCall';
$route['hgu'] = 'QueueStepFlow/QsfController/headerGetUser';



$route['qsdPrio'] = 'QueueStatusDisplay/QsdController/qsdPriorityCont';
$route['qsdS2PrioRou'] = 'QueueStatusDisplay/QsdController/s2PrioCont';
$route['qsdS3W1PrioRou'] = 'QueueStatusDisplay/QsdController/s3w1PrioCont';
$route['qsdS3W2PrioRou'] = 'QueueStatusDisplay/QsdController/s3w2PrioCont';
$route['qsdS3W3PrioRou'] = 'QueueStatusDisplay/QsdController/s3w3PrioCont';
$route['qsdS4W1PrioRou'] = 'QueueStatusDisplay/QsdController/s4w1PrioCont';
$route['qsdS4W2PrioRou'] = 'QueueStatusDisplay/QsdController/s4w2PrioCont';


$route['qsdRegu'] = 'QueueStatusDisplay/QsdController/qsdRegCont';
$route['qsdS2RegRou'] = 'QueueStatusDisplay/QsdController/s2RegCont';
$route['qsdS3W1RegRou'] = 'QueueStatusDisplay/QsdController/s3w1RegCont';
$route['qsdS3W2RegRou'] = 'QueueStatusDisplay/QsdController/s3w2RegCont';
$route['qsdS3W3RegRou'] = 'QueueStatusDisplay/QsdController/s3w3RegCont';
$route['qsdS4W1RegRou'] = 'QueueStatusDisplay/QsdController/s4w1RegCont';
$route['qsdS4W2RegRou'] = 'QueueStatusDisplay/QsdController/s4w2RegCont';

$route['qsdfv'] = 'QueueStatusDisplay/QsdController/qsdFetchValues';
$route['qsdStep2Regu'] = 'QueueStatusDisplay/QsdController/qsdS2ReguCont';
$route['qsdStep3'] = 'QueueStatusDisplay/QsdController/qsdS3';

$route['qsdFooterMarquee'] = 'QueueStatusDisplay/QsdController/qsdFM';

$route['userLogged'] = 'QueueStepFlow/QsfController/userLogged';
