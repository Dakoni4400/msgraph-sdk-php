<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VirtualEndpoint File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* VirtualEndpoint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VirtualEndpoint extends Entity
{

     /** 
     * Gets the auditEvents
    * Cloud PC audit event.
     *
     * @return array|null The auditEvents
     */
    public function getAuditEvents()
    {
        if (array_key_exists("auditEvents", $this->_propDict)) {
           return $this->_propDict["auditEvents"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the auditEvents
    * Cloud PC audit event.
    *
    * @param CloudPcAuditEvent $val The auditEvents
    *
    * @return VirtualEndpoint
    */
    public function setAuditEvents($val)
    {
        $this->_propDict["auditEvents"] = $val;
        return $this;
    }
    

     /** 
     * Gets the cloudPCs
    * Cloud managed virtual desktops.
     *
     * @return array|null The cloudPCs
     */
    public function getCloudPCs()
    {
        if (array_key_exists("cloudPCs", $this->_propDict)) {
           return $this->_propDict["cloudPCs"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the cloudPCs
    * Cloud managed virtual desktops.
    *
    * @param CloudPC $val The cloudPCs
    *
    * @return VirtualEndpoint
    */
    public function setCloudPCs($val)
    {
        $this->_propDict["cloudPCs"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceImages
    * The image resource on Cloud PC.
     *
     * @return array|null The deviceImages
     */
    public function getDeviceImages()
    {
        if (array_key_exists("deviceImages", $this->_propDict)) {
           return $this->_propDict["deviceImages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceImages
    * The image resource on Cloud PC.
    *
    * @param CloudPcDeviceImage $val The deviceImages
    *
    * @return VirtualEndpoint
    */
    public function setDeviceImages($val)
    {
        $this->_propDict["deviceImages"] = $val;
        return $this;
    }
    

     /** 
     * Gets the galleryImages
     *
     * @return array|null The galleryImages
     */
    public function getGalleryImages()
    {
        if (array_key_exists("galleryImages", $this->_propDict)) {
           return $this->_propDict["galleryImages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the galleryImages
    *
    * @param CloudPcGalleryImage $val The galleryImages
    *
    * @return VirtualEndpoint
    */
    public function setGalleryImages($val)
    {
        $this->_propDict["galleryImages"] = $val;
        return $this;
    }
    

     /** 
     * Gets the onPremisesConnections
    * A defined collection of Azure resource information that can be used to establish on-premises network connectivity for Cloud PCs.
     *
     * @return array|null The onPremisesConnections
     */
    public function getOnPremisesConnections()
    {
        if (array_key_exists("onPremisesConnections", $this->_propDict)) {
           return $this->_propDict["onPremisesConnections"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the onPremisesConnections
    * A defined collection of Azure resource information that can be used to establish on-premises network connectivity for Cloud PCs.
    *
    * @param CloudPcOnPremisesConnection $val The onPremisesConnections
    *
    * @return VirtualEndpoint
    */
    public function setOnPremisesConnections($val)
    {
        $this->_propDict["onPremisesConnections"] = $val;
        return $this;
    }
    

     /** 
     * Gets the provisioningPolicies
    * Cloud PC provisioning policy.
     *
     * @return array|null The provisioningPolicies
     */
    public function getProvisioningPolicies()
    {
        if (array_key_exists("provisioningPolicies", $this->_propDict)) {
           return $this->_propDict["provisioningPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the provisioningPolicies
    * Cloud PC provisioning policy.
    *
    * @param CloudPcProvisioningPolicy $val The provisioningPolicies
    *
    * @return VirtualEndpoint
    */
    public function setProvisioningPolicies($val)
    {
        $this->_propDict["provisioningPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the servicePlans
    * Cloud PC service plans.
     *
     * @return array|null The servicePlans
     */
    public function getServicePlans()
    {
        if (array_key_exists("servicePlans", $this->_propDict)) {
           return $this->_propDict["servicePlans"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the servicePlans
    * Cloud PC service plans.
    *
    * @param CloudPcServicePlan $val The servicePlans
    *
    * @return VirtualEndpoint
    */
    public function setServicePlans($val)
    {
        $this->_propDict["servicePlans"] = $val;
        return $this;
    }
    

     /** 
     * Gets the supportedRegions
    * Cloud PC supported regions.
     *
     * @return array|null The supportedRegions
     */
    public function getSupportedRegions()
    {
        if (array_key_exists("supportedRegions", $this->_propDict)) {
           return $this->_propDict["supportedRegions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the supportedRegions
    * Cloud PC supported regions.
    *
    * @param CloudPcSupportedRegion $val The supportedRegions
    *
    * @return VirtualEndpoint
    */
    public function setSupportedRegions($val)
    {
        $this->_propDict["supportedRegions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userSettings
    * Cloud PC user settings.
     *
     * @return array|null The userSettings
     */
    public function getUserSettings()
    {
        if (array_key_exists("userSettings", $this->_propDict)) {
           return $this->_propDict["userSettings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userSettings
    * Cloud PC user settings.
    *
    * @param CloudPcUserSetting $val The userSettings
    *
    * @return VirtualEndpoint
    */
    public function setUserSettings($val)
    {
        $this->_propDict["userSettings"] = $val;
        return $this;
    }
    
}
