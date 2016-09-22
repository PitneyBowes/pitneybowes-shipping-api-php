<?php

#
# Copyright 2016 Pitney Bowes Inc.
#
# Licensed under the MIT License (the "License"); you may not use this file 
# except in compliance with the License. You may obtain a copy of the License 
# in the LICENSE file or at 
#     https://opensource.org/licenses/MIT
#
# Unless required by applicable law or agreed to in writing, software 
# distributed under the License is distributed on an "AS IS" BASIS, WITHOUT 
# WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  
# See the License for the specific language governing permissions and 
# limitations under the License.
#
# File: pbshipping.php
# Description: top level file to include all required source files for shipping 
#              api
# 

require(dirname(__FILE__) . '/pbshipping/pbshipping.php');

require(dirname(__FILE__) . '/pbshipping/error.php');
require(dirname(__FILE__) . '/pbshipping/authentication.php');
require(dirname(__FILE__) . '/pbshipping/requestor.php');

require(dirname(__FILE__) . '/pbshipping/api_object.php');
require(dirname(__FILE__) . '/pbshipping/api_resource.php');

require(dirname(__FILE__) . '/pbshipping/account.php');
require(dirname(__FILE__) . '/pbshipping/address.php');
require(dirname(__FILE__) . '/pbshipping/carrier.php');
require(dirname(__FILE__) . '/pbshipping/developer.php');
require(dirname(__FILE__) . '/pbshipping/manifest.php');
require(dirname(__FILE__) . '/pbshipping/shipment.php');
require(dirname(__FILE__) . '/pbshipping/tracking.php');





  
