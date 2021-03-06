<?php
namespace QuickBooksOnline\API\Data;

/**
 * @xmlNamespace http://schema.intuit.com/finance/v3
 * @xmlType 
 * @xmlName IPPItemReceiptLineDetail
 * @var IPPItemReceiptLineDetail
 * @xmlDefinition 
				Product: ALL
				Description: ItemReceipt detail for a
				transaction line.
			
 */
class IPPItemReceiptLineDetail
	{

		/**                                                                       
		* Initializes this object, optionally with pre-defined property values    
		*                                                                         
		* Initializes this object and it's property members, using the dictionary
		* of key/value pairs passed as an optional argument.                      
		*                                                                         
		* @param array $keyValInitializers key/value pairs to be populated into object's properties 
		* @param boolean $verbose specifies whether object should echo warnings   
		*/                                                                        
		public function __construct($keyValInitializers=array(), $verbose=FALSE)
		{
			foreach($keyValInitializers as $initPropName => $initPropVal)
			{
				if (property_exists('IPPItemReceiptLineDetail',$initPropName) || property_exists('QuickBooksOnline\API\Data\IPPItemReceiptLineDetail',$initPropName))
				{
					$this->{$initPropName} = $initPropVal;
				}
				else
				{
					if ($verbose)
						echo "Property does not exist ($initPropName) in class (".get_class($this).")";
				}
			}
		}

	
	/**
	 * @Definition 
						Product: ALL
						Description: Internal use only:
						extension place holder for ItemReceiptDetail
					
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlName ItemReceiptLineDetailEx
	 * @var IPPIntuitAnyType
	 */
	public $ItemReceiptLineDetailEx;


} // end class IPPItemReceiptLineDetail
