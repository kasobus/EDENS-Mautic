<?php

namespace Proxies\__CG__\Mautic\PageBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Page extends \Mautic\PageBundle\Entity\Page implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'id', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'title', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'alias', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'template', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'language', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'customHtml', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'content', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'publishUp', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'publishDown', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'hits', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'uniqueHits', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'variantHits', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'revision', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'metaDescription', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'redirectType', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'redirectUrl', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'category', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'translationChildren', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'translationParent', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'variantChildren', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'variantParent', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'variantSettings', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'variantStartDate', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'sessionId', 'changes');
        }

        return array('__isInitialized__', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'id', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'title', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'alias', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'template', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'language', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'customHtml', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'content', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'publishUp', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'publishDown', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'hits', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'uniqueHits', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'variantHits', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'revision', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'metaDescription', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'redirectType', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'redirectUrl', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'category', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'translationChildren', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'translationParent', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'variantChildren', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'variantParent', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'variantSettings', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'variantStartDate', '' . "\0" . 'Mautic\\PageBundle\\Entity\\Page' . "\0" . 'sessionId', 'changes');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Page $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());

        parent::__clone();
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', array($title));

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', array());

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlias($alias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlias', array($alias));

        return parent::setAlias($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlias()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlias', array());

        return parent::getAlias();
    }

    /**
     * {@inheritDoc}
     */
    public function setContent($content)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContent', array($content));

        return parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContent', array());

        return parent::getContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublishUp($publishUp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublishUp', array($publishUp));

        return parent::setPublishUp($publishUp);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishUp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishUp', array());

        return parent::getPublishUp();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublishDown($publishDown)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublishDown', array($publishDown));

        return parent::setPublishDown($publishDown);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishDown()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishDown', array());

        return parent::getPublishDown();
    }

    /**
     * {@inheritDoc}
     */
    public function setHits($hits)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHits', array($hits));

        return parent::setHits($hits);
    }

    /**
     * {@inheritDoc}
     */
    public function getHits()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHits', array());

        return parent::getHits();
    }

    /**
     * {@inheritDoc}
     */
    public function setRevision($revision)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRevision', array($revision));

        return parent::setRevision($revision);
    }

    /**
     * {@inheritDoc}
     */
    public function getRevision()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRevision', array());

        return parent::getRevision();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetaDescription($metaDescription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaDescription', array($metaDescription));

        return parent::setMetaDescription($metaDescription);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaDescription', array());

        return parent::getMetaDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setRedirectType($redirectType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRedirectType', array($redirectType));

        return parent::setRedirectType($redirectType);
    }

    /**
     * {@inheritDoc}
     */
    public function getRedirectType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRedirectType', array());

        return parent::getRedirectType();
    }

    /**
     * {@inheritDoc}
     */
    public function setRedirectUrl($redirectUrl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRedirectUrl', array($redirectUrl));

        return parent::setRedirectUrl($redirectUrl);
    }

    /**
     * {@inheritDoc}
     */
    public function getRedirectUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRedirectUrl', array());

        return parent::getRedirectUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setLanguage($language)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLanguage', array($language));

        return parent::setLanguage($language);
    }

    /**
     * {@inheritDoc}
     */
    public function getLanguage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLanguage', array());

        return parent::getLanguage();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(\Mautic\CategoryBundle\Entity\Category $category = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', array($category));

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', array());

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setSessionId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSessionId', array($id));

        return parent::setSessionId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getSessionId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSessionId', array());

        return parent::getSessionId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTemplate($template)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTemplate', array($template));

        return parent::setTemplate($template);
    }

    /**
     * {@inheritDoc}
     */
    public function getTemplate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTemplate', array());

        return parent::getTemplate();
    }

    /**
     * {@inheritDoc}
     */
    public function addTranslationChild(\Mautic\PageBundle\Entity\Page $translationChildren)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTranslationChild', array($translationChildren));

        return parent::addTranslationChild($translationChildren);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTranslationChild(\Mautic\PageBundle\Entity\Page $translationChildren)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTranslationChild', array($translationChildren));

        return parent::removeTranslationChild($translationChildren);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslationChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslationChildren', array());

        return parent::getTranslationChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function setTranslationParent(\Mautic\PageBundle\Entity\Page $translationParent = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTranslationParent', array($translationParent));

        return parent::setTranslationParent($translationParent);
    }

    /**
     * {@inheritDoc}
     */
    public function removeVariantParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeVariantParent', array());

        return parent::removeVariantParent();
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslationParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslationParent', array());

        return parent::getTranslationParent();
    }

    /**
     * {@inheritDoc}
     */
    public function addVariantChild(\Mautic\PageBundle\Entity\Page $variantChildren)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addVariantChild', array($variantChildren));

        return parent::addVariantChild($variantChildren);
    }

    /**
     * {@inheritDoc}
     */
    public function removeVariantChild(\Mautic\PageBundle\Entity\Page $variantChildren)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeVariantChild', array($variantChildren));

        return parent::removeVariantChild($variantChildren);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariantChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariantChildren', array());

        return parent::getVariantChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariantParent(\Mautic\PageBundle\Entity\Page $variantParent = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariantParent', array($variantParent));

        return parent::setVariantParent($variantParent);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTranslationParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTranslationParent', array());

        return parent::removeTranslationParent();
    }

    /**
     * {@inheritDoc}
     */
    public function getVariantParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariantParent', array());

        return parent::getVariantParent();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariantSettings($variantSettings)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariantSettings', array($variantSettings));

        return parent::setVariantSettings($variantSettings);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariantSettings()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariantSettings', array());

        return parent::getVariantSettings();
    }

    /**
     * {@inheritDoc}
     */
    public function setUniqueHits($uniqueHits)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUniqueHits', array($uniqueHits));

        return parent::setUniqueHits($uniqueHits);
    }

    /**
     * {@inheritDoc}
     */
    public function getUniqueHits()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUniqueHits', array());

        return parent::getUniqueHits();
    }

    /**
     * {@inheritDoc}
     */
    public function getVariantHits()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariantHits', array());

        return parent::getVariantHits();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariantHits($variantHits)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariantHits', array($variantHits));

        return parent::setVariantHits($variantHits);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariantStartDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariantStartDate', array());

        return parent::getVariantStartDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariantStartDate($variantStartDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariantStartDate', array($variantStartDate));

        return parent::setVariantStartDate($variantStartDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomHtml()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomHtml', array());

        return parent::getCustomHtml();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomHtml($customHtml)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomHtml', array($customHtml));

        return parent::setCustomHtml($customHtml);
    }

    /**
     * {@inheritDoc}
     */
    public function isPublished($checkPublishStatus = true, $checkCategoryStatus = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPublished', array($checkPublishStatus, $checkCategoryStatus));

        return parent::isPublished($checkPublishStatus, $checkCategoryStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function getChanges()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanges', array());

        return parent::getChanges();
    }

    /**
     * {@inheritDoc}
     */
    public function resetChanges()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetChanges', array());

        return parent::resetChanges();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAdded($dateAdded)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAdded', array($dateAdded));

        return parent::setDateAdded($dateAdded);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAdded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAdded', array());

        return parent::getDateAdded();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateModified($dateModified)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateModified', array($dateModified));

        return parent::setDateModified($dateModified);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateModified()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateModified', array());

        return parent::getDateModified();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOut($checkedOut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOut', array($checkedOut));

        return parent::setCheckedOut($checkedOut);
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOut', array());

        return parent::getCheckedOut();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy($createdBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', array($createdBy));

        return parent::setCreatedBy($createdBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', array());

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setModifiedBy($modifiedBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModifiedBy', array($modifiedBy));

        return parent::setModifiedBy($modifiedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifiedBy', array());

        return parent::getModifiedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOutBy($checkedOutBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOutBy', array($checkedOutBy));

        return parent::setCheckedOutBy($checkedOutBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOutBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOutBy', array());

        return parent::getCheckedOutBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPublished($isPublished)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPublished', array($isPublished));

        return parent::setIsPublished($isPublished);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPublished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPublished', array());

        return parent::getIsPublished();
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishStatus', array());

        return parent::getPublishStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function isNew()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isNew', array());

        return parent::isNew();
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOutByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOutByUser', array());

        return parent::getCheckedOutByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedByUser', array());

        return parent::getCreatedByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiedByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifiedByUser', array());

        return parent::getModifiedByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedByUser($createdByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedByUser', array($createdByUser));

        return parent::setCreatedByUser($createdByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setModifiedByUser($modifiedByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModifiedByUser', array($modifiedByUser));

        return parent::setModifiedByUser($modifiedByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOutByUser($checkedOutByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOutByUser', array($checkedOutByUser));

        return parent::setCheckedOutByUser($checkedOutByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($name, $arguments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', array($name, $arguments));

        return parent::__call($name, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
