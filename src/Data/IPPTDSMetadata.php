<?php
namespace QuickBooksOnline\API\Data;

/**
 * @xmlNamespace http://schema.intuit.com/finance/v3
 * @xmlType IntuitEntity
 * @xmlName IPPTDSMetadata
 * @var IPPTDSMetadata
 * @xmlDefinition 
				Product: QBO
				Description: Describes metadata
				associated with TDS entity.
			
 */
class IPPTDSMetadata
	extends IPPIntuitEntity	{

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
			parent::__construct($keyValInitializers, $verbose);
			
			foreach($keyValInitializers as $initPropName => $initPropVal)
			{
				if (property_exists('IPPTDSMetadata',$initPropName) || property_exists('QuickBooksOnline\API\Data\IPPTDSMetadata',$initPropName))
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
								Product: QBO
								Description: Provides list of TDS entity types supported for India region.
							
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs unbounded
	 * @xmlName TDSEntityTypes
	 * @var IPPNameValue
	 */
	public $TDSEntityTypes;
	/**
	 * @Definition 
								Product: QBO
								Description: Provides list of TDS section types supported for India region.
							
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs unbounded
	 * @xmlName TDSSectionTypes
	 * @var IPPNameValue
	 */
	public $TDSSectionTypes;


} // end class IPPTDSMetadata
