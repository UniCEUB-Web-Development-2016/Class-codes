<?php

include "util/RequestRouter.php";
	

   echo json_encode((new RequestRouter)->route());