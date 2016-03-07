<?php

  /**
   * HTML purfiier for angie initialization file
   * 
   * @package angie.vendor.htmlpurifier
   */

  define('HTML_PURIFIER_FOR_ANGIE_PATH', ANGIE_PATH . '/vendor/htmlpurifier');

  // define HTML purifier constant needed for loading html purifier files
  if (!defined('HTMLPURIFIER_PREFIX')) {
    define('HTMLPURIFIER_PREFIX', HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier');
  } // if

  /**
   * Purify HTML
   *
   * This function will initialize HTML Purifier and run $html through it.
   *
   * @param string $html
   * @return string
   * @deprecated
   */
  function purify_html($html) {
    return HtmlPurifierForAngie::purify($html);
  } // purify_html

  AngieApplication::setForAutoload(array(
    'HtmlPurifierForAngie' => HTML_PURIFIER_FOR_ANGIE_PATH . '/HtmlPurifierForAngie.class.php',

    // HTML purifier (list generated with /development/purifier-to-autoload.php script)
    'HTMLPurifier' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier.php', 
    'HTMLPurifier_AttrCollections' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrCollections.php', 
    'HTMLPurifier_AttrDef' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef.php', 
    'HTMLPurifier_AttrTransform' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrTransform.php', 
    'HTMLPurifier_AttrTypes' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrTypes.php', 
    'HTMLPurifier_AttrValidator' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrValidator.php', 
    'HTMLPurifier_Bootstrap' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Bootstrap.php', 
    'HTMLPurifier_Definition' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Definition.php', 
    'HTMLPurifier_CSSDefinition' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/CSSDefinition.php', 
    'HTMLPurifier_ChildDef' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/ChildDef.php', 
    'HTMLPurifier_Config' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Config.php', 
    'HTMLPurifier_ConfigSchema' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/ConfigSchema.php', 
    'HTMLPurifier_ContentSets' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/ContentSets.php', 
    'HTMLPurifier_Context' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Context.php', 
    'HTMLPurifier_DefinitionCache' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/DefinitionCache.php', 
    'HTMLPurifier_DefinitionCacheFactory' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/DefinitionCacheFactory.php', 
    'HTMLPurifier_Doctype' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Doctype.php', 
    'HTMLPurifier_DoctypeRegistry' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/DoctypeRegistry.php', 
    'HTMLPurifier_ElementDef' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/ElementDef.php', 
    'HTMLPurifier_Encoder' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Encoder.php', 
    'HTMLPurifier_EntityLookup' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/EntityLookup.php', 
    'HTMLPurifier_EntityParser' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/EntityParser.php', 
    'HTMLPurifier_ErrorCollector' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/ErrorCollector.php', 
    'HTMLPurifier_ErrorStruct' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/ErrorStruct.php', 
    'HTMLPurifier_Exception' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Exception.php', 
    'HTMLPurifier_Filter' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Filter.php', 
    'HTMLPurifier_Generator' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Generator.php', 
    'HTMLPurifier_HTMLDefinition' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLDefinition.php', 
    'HTMLPurifier_HTMLModule' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule.php', 
    'HTMLPurifier_HTMLModuleManager' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModuleManager.php', 
    'HTMLPurifier_IDAccumulator' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/IDAccumulator.php', 
    'HTMLPurifier_Injector' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Injector.php', 
    'HTMLPurifier_Language' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Language.php', 
    'HTMLPurifier_LanguageFactory' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/LanguageFactory.php', 
    'HTMLPurifier_Length' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Length.php', 
    'HTMLPurifier_Lexer' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Lexer.php', 
    'HTMLPurifier_PercentEncoder' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/PercentEncoder.php', 
    'HTMLPurifier_PropertyList' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/PropertyList.php', 
    'HTMLPurifier_PropertyListIterator' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/PropertyListIterator.php', 
    'HTMLPurifier_Strategy' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Strategy.php', 
    'HTMLPurifier_StringHash' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/StringHash.php', 
    'HTMLPurifier_StringHashParser' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/StringHashParser.php', 
    'HTMLPurifier_TagTransform' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/TagTransform.php', 
    'HTMLPurifier_Token' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Token.php', 
    'HTMLPurifier_TokenFactory' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/TokenFactory.php', 
    'HTMLPurifier_URI' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/URI.php', 
    'HTMLPurifier_URIDefinition' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/URIDefinition.php', 
    'HTMLPurifier_URIFilter' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/URIFilter.php', 
    'HTMLPurifier_URIParser' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/URIParser.php', 
    'HTMLPurifier_URIScheme' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/URIScheme.php', 
    'HTMLPurifier_URISchemeRegistry' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/URISchemeRegistry.php', 
    'HTMLPurifier_UnitConverter' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/UnitConverter.php', 
    'HTMLPurifier_VarParser' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/VarParser.php', 
    'HTMLPurifier_VarParserException' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/VarParserException.php', 
    'HTMLPurifier_AttrDef_CSS' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/CSS.php', 
    'HTMLPurifier_AttrDef_Clone' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/Clone.php', 
    'HTMLPurifier_AttrDef_Enum' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/Enum.php', 
    'HTMLPurifier_AttrDef_Integer' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/Integer.php', 
    'HTMLPurifier_AttrDef_Lang' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/Lang.php', 
    'HTMLPurifier_AttrDef_Switch' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/Switch.php', 
    'HTMLPurifier_AttrDef_Text' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/Text.php', 
    'HTMLPurifier_AttrDef_URI' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/URI.php', 
    'HTMLPurifier_AttrDef_CSS_Number' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/CSS/Number.php', 
    'HTMLPurifier_AttrDef_CSS_AlphaValue' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/CSS/AlphaValue.php', 
    'HTMLPurifier_AttrDef_CSS_Background' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/CSS/Background.php', 
    'HTMLPurifier_AttrDef_CSS_BackgroundPosition' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/CSS/BackgroundPosition.php', 
    'HTMLPurifier_AttrDef_CSS_Border' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/CSS/Border.php', 
    'HTMLPurifier_AttrDef_CSS_Color' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/CSS/Color.php', 
    'HTMLPurifier_AttrDef_CSS_Composite' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/CSS/Composite.php', 
    'HTMLPurifier_AttrDef_CSS_DenyElementDecorator' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/CSS/DenyElementDecorator.php', 
    'HTMLPurifier_AttrDef_CSS_Filter' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/CSS/Filter.php', 
    'HTMLPurifier_AttrDef_CSS_Font' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/CSS/Font.php', 
    'HTMLPurifier_AttrDef_CSS_FontFamily' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/CSS/FontFamily.php', 
    'HTMLPurifier_AttrDef_CSS_Ident' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/CSS/Ident.php', 
    'HTMLPurifier_AttrDef_CSS_ImportantDecorator' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/CSS/ImportantDecorator.php', 
    'HTMLPurifier_AttrDef_CSS_Length' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/CSS/Length.php', 
    'HTMLPurifier_AttrDef_CSS_ListStyle' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/CSS/ListStyle.php', 
    'HTMLPurifier_AttrDef_CSS_Multiple' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/CSS/Multiple.php', 
    'HTMLPurifier_AttrDef_CSS_Percentage' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/CSS/Percentage.php', 
    'HTMLPurifier_AttrDef_CSS_TextDecoration' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/CSS/TextDecoration.php', 
    'HTMLPurifier_AttrDef_CSS_URI' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/CSS/URI.php', 
    'HTMLPurifier_AttrDef_HTML_Bool' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/HTML/Bool.php', 
    'HTMLPurifier_AttrDef_HTML_Nmtokens' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/HTML/Nmtokens.php', 
    'HTMLPurifier_AttrDef_HTML_Class' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/HTML/Class.php', 
    'HTMLPurifier_AttrDef_HTML_Color' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/HTML/Color.php', 
    'HTMLPurifier_AttrDef_HTML_FrameTarget' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/HTML/FrameTarget.php', 
    'HTMLPurifier_AttrDef_HTML_ID' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/HTML/ID.php', 
    'HTMLPurifier_AttrDef_HTML_Pixels' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/HTML/Pixels.php', 
    'HTMLPurifier_AttrDef_HTML_Length' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/HTML/Length.php', 
    'HTMLPurifier_AttrDef_HTML_LinkTypes' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/HTML/LinkTypes.php', 
    'HTMLPurifier_AttrDef_HTML_MultiLength' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/HTML/MultiLength.php', 
    'HTMLPurifier_AttrDef_URI_Email' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/URI/Email.php', 
    'HTMLPurifier_AttrDef_URI_Host' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/URI/Host.php', 
    'HTMLPurifier_AttrDef_URI_IPv4' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/URI/IPv4.php', 
    'HTMLPurifier_AttrDef_URI_IPv6' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/URI/IPv6.php', 
    'HTMLPurifier_AttrDef_URI_Email_SimpleCheck' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrDef/URI/Email/SimpleCheck.php', 
    'HTMLPurifier_AttrTransform_Background' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrTransform/Background.php', 
    'HTMLPurifier_AttrTransform_BdoDir' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrTransform/BdoDir.php', 
    'HTMLPurifier_AttrTransform_BgColor' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrTransform/BgColor.php', 
    'HTMLPurifier_AttrTransform_BoolToCSS' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrTransform/BoolToCSS.php', 
    'HTMLPurifier_AttrTransform_Border' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrTransform/Border.php', 
    'HTMLPurifier_AttrTransform_EnumToCSS' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrTransform/EnumToCSS.php', 
    'HTMLPurifier_AttrTransform_ImgRequired' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrTransform/ImgRequired.php', 
    'HTMLPurifier_AttrTransform_ImgSpace' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrTransform/ImgSpace.php', 
    'HTMLPurifier_AttrTransform_Input' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrTransform/Input.php', 
    'HTMLPurifier_AttrTransform_Lang' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrTransform/Lang.php', 
    'HTMLPurifier_AttrTransform_Length' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrTransform/Length.php', 
    'HTMLPurifier_AttrTransform_Name' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrTransform/Name.php', 
    'HTMLPurifier_AttrTransform_NameSync' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrTransform/NameSync.php', 
    'HTMLPurifier_AttrTransform_Nofollow' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrTransform/Nofollow.php', 
    'HTMLPurifier_AttrTransform_SafeEmbed' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrTransform/SafeEmbed.php', 
    'HTMLPurifier_AttrTransform_SafeObject' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrTransform/SafeObject.php', 
    'HTMLPurifier_AttrTransform_SafeParam' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrTransform/SafeParam.php', 
    'HTMLPurifier_AttrTransform_ScriptRequired' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrTransform/ScriptRequired.php', 
    'HTMLPurifier_AttrTransform_TargetBlank' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrTransform/TargetBlank.php', 
    'HTMLPurifier_AttrTransform_Textarea' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/AttrTransform/Textarea.php', 
    'HTMLPurifier_ChildDef_Chameleon' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/ChildDef/Chameleon.php', 
    'HTMLPurifier_ChildDef_Custom' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/ChildDef/Custom.php', 
    'HTMLPurifier_ChildDef_Empty' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/ChildDef/Empty.php', 
    'HTMLPurifier_ChildDef_List' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/ChildDef/List.php', 
    'HTMLPurifier_ChildDef_Required' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/ChildDef/Required.php', 
    'HTMLPurifier_ChildDef_Optional' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/ChildDef/Optional.php', 
    'HTMLPurifier_ChildDef_StrictBlockquote' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/ChildDef/StrictBlockquote.php', 
    'HTMLPurifier_ChildDef_Table' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/ChildDef/Table.php', 
    'HTMLPurifier_DefinitionCache_Decorator' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/DefinitionCache/Decorator.php', 
    'HTMLPurifier_DefinitionCache_Null' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/DefinitionCache/Null.php', 
    'HTMLPurifier_DefinitionCache_Serializer' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/DefinitionCache/Serializer.php', 
    'HTMLPurifier_DefinitionCache_Decorator_Cleanup' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/DefinitionCache/Decorator/Cleanup.php', 
    'HTMLPurifier_DefinitionCache_Decorator_Memory' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/DefinitionCache/Decorator/Memory.php', 
    'HTMLPurifier_HTMLModule_Bdo' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/Bdo.php', 
    'HTMLPurifier_HTMLModule_CommonAttributes' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/CommonAttributes.php', 
    'HTMLPurifier_HTMLModule_Edit' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/Edit.php', 
    'HTMLPurifier_HTMLModule_Forms' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/Forms.php', 
    'HTMLPurifier_HTMLModule_Hypertext' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/Hypertext.php', 
    'HTMLPurifier_HTMLModule_Iframe' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/Iframe.php', 
    'HTMLPurifier_HTMLModule_Image' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/Image.php', 
    'HTMLPurifier_HTMLModule_Legacy' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/Legacy.php', 
    'HTMLPurifier_HTMLModule_List' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/List.php', 
    'HTMLPurifier_HTMLModule_Name' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/Name.php', 
    'HTMLPurifier_HTMLModule_Nofollow' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/Nofollow.php', 
    'HTMLPurifier_HTMLModule_NonXMLCommonAttributes' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/NonXMLCommonAttributes.php', 
    'HTMLPurifier_HTMLModule_Object' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/Object.php', 
    'HTMLPurifier_HTMLModule_Presentation' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/Presentation.php', 
    'HTMLPurifier_HTMLModule_Proprietary' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/Proprietary.php', 
    'HTMLPurifier_HTMLModule_Ruby' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/Ruby.php', 
    'HTMLPurifier_HTMLModule_SafeEmbed' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/SafeEmbed.php', 
    'HTMLPurifier_HTMLModule_SafeObject' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/SafeObject.php', 
    'HTMLPurifier_HTMLModule_Scripting' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/Scripting.php', 
    'HTMLPurifier_HTMLModule_StyleAttribute' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/StyleAttribute.php', 
    'HTMLPurifier_HTMLModule_Tables' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/Tables.php', 
    'HTMLPurifier_HTMLModule_Target' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/Target.php', 
    'HTMLPurifier_HTMLModule_TargetBlank' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/TargetBlank.php', 
    'HTMLPurifier_HTMLModule_Text' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/Text.php', 
    'HTMLPurifier_HTMLModule_Tidy' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/Tidy.php', 
    'HTMLPurifier_HTMLModule_XMLCommonAttributes' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/XMLCommonAttributes.php', 
    'HTMLPurifier_HTMLModule_Tidy_Name' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/Tidy/Name.php', 
    'HTMLPurifier_HTMLModule_Tidy_Proprietary' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/Tidy/Proprietary.php', 
    'HTMLPurifier_HTMLModule_Tidy_XHTMLAndHTML4' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/Tidy/XHTMLAndHTML4.php', 
    'HTMLPurifier_HTMLModule_Tidy_Strict' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/Tidy/Strict.php', 
    'HTMLPurifier_HTMLModule_Tidy_Transitional' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/Tidy/Transitional.php', 
    'HTMLPurifier_HTMLModule_Tidy_XHTML' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/HTMLModule/Tidy/XHTML.php', 
    'HTMLPurifier_Injector_AutoParagraph' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Injector/AutoParagraph.php', 
    'HTMLPurifier_Injector_DisplayLinkURI' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Injector/DisplayLinkURI.php', 
    'HTMLPurifier_Injector_Linkify' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Injector/Linkify.php', 
    'HTMLPurifier_Injector_PurifierLinkify' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Injector/PurifierLinkify.php', 
    'HTMLPurifier_Injector_RemoveEmpty' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Injector/RemoveEmpty.php', 
    'HTMLPurifier_Injector_RemoveSpansWithoutAttributes' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Injector/RemoveSpansWithoutAttributes.php', 
    'HTMLPurifier_Injector_SafeObject' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Injector/SafeObject.php', 
    'HTMLPurifier_Lexer_DOMLex' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Lexer/DOMLex.php', 
    'HTMLPurifier_Lexer_DirectLex' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Lexer/DirectLex.php', 
    'HTMLPurifier_Strategy_Composite' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Strategy/Composite.php', 
    'HTMLPurifier_Strategy_Core' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Strategy/Core.php', 
    'HTMLPurifier_Strategy_FixNesting' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Strategy/FixNesting.php', 
    'HTMLPurifier_Strategy_MakeWellFormed' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Strategy/MakeWellFormed.php', 
    'HTMLPurifier_Strategy_RemoveForeignElements' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Strategy/RemoveForeignElements.php', 
    'HTMLPurifier_Strategy_ValidateAttributes' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Strategy/ValidateAttributes.php', 
    'HTMLPurifier_TagTransform_Font' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/TagTransform/Font.php', 
    'HTMLPurifier_TagTransform_Simple' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/TagTransform/Simple.php', 
    'HTMLPurifier_Token_Comment' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Token/Comment.php', 
    'HTMLPurifier_Token_Tag' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Token/Tag.php', 
    'HTMLPurifier_Token_Empty' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Token/Empty.php', 
    'HTMLPurifier_Token_End' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Token/End.php', 
    'HTMLPurifier_Token_Start' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Token/Start.php', 
    'HTMLPurifier_Token_Text' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/Token/Text.php', 
    'HTMLPurifier_URIFilter_DisableExternal' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/URIFilter/DisableExternal.php', 
    'HTMLPurifier_URIFilter_DisableExternalResources' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/URIFilter/DisableExternalResources.php', 
    'HTMLPurifier_URIFilter_DisableResources' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/URIFilter/DisableResources.php', 
    'HTMLPurifier_URIFilter_HostBlacklist' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/URIFilter/HostBlacklist.php', 
    'HTMLPurifier_URIFilter_MakeAbsolute' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/URIFilter/MakeAbsolute.php', 
    'HTMLPurifier_URIFilter_Munge' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/URIFilter/Munge.php', 
    'HTMLPurifier_URIFilter_SafeIframe' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/URIFilter/SafeIframe.php', 
    'HTMLPurifier_URIScheme_data' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/URIScheme/data.php', 
    'HTMLPurifier_URIScheme_file' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/URIScheme/file.php', 
    'HTMLPurifier_URIScheme_ftp' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/URIScheme/ftp.php', 
    'HTMLPurifier_URIScheme_http' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/URIScheme/http.php', 
    'HTMLPurifier_URIScheme_https' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/URIScheme/https.php', 
    'HTMLPurifier_URIScheme_mailto' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/URIScheme/mailto.php', 
    'HTMLPurifier_URIScheme_news' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/URIScheme/news.php', 
    'HTMLPurifier_URIScheme_nntp' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/URIScheme/nntp.php', 
    'HTMLPurifier_VarParser_Flexible' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/VarParser/Flexible.php', 
    'HTMLPurifier_VarParser_Native' => HTML_PURIFIER_FOR_ANGIE_PATH . '/htmlpurifier/HTMLPurifier/VarParser/Native.php', 
  ));