# CreateShareLinkRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shared_asset_ids** | **string[]** |  | [optional] 
**shared_container_id** | **string** |  | [optional] 
**upload_folder_path** | **string** |  | [optional] 
**subject** | **string** | Subject for the Share Link. Visible to anyone who views the Share Link. | 
**description** | **string** | Optional: Description for the Share Link. Visible to anyone who views the Share Link. | [optional] 
**valid_until** | [**\DateTime**](\DateTime.md) | The expiration time of the Share Link, ISO 8601 formatted. Must be in the future. | 
**query** | **string** | Display assets in the Share Link based on a query. Conditionally required: Either sharedAssetIds, query or sharedContainerId must be specified or requestUpload must be true. | [optional] 
**request_upload** | **bool** | Allow the person that views the Share Link to upload files. The files will automatically be uploaded to the uploadFolderPath that you specify. Conditionally required: Either sharedAssetIds, query or sharedContainerId must be specified or requestUpload must be true. | [optional] 
**request_approval** | **bool** | Optional: Request the person who views the Share Link to approve or reject the shared files. | [optional] 
**notify_email** | **string** | Optional: Supplied email address will receive notifications for uploads and/or approvals within the Share Link. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


