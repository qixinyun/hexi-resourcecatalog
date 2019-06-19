<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList
{   
    const TYPE = array(
        'NULL' => 0,
        'XBXZCF' => 1,
        'XBXZXK' => 2,
        'TEST' => 500
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK']
        ),
        IUserGroup::ID['QFGW'] => array(self::TYPE['TEST']),
        IUserGroup::ID['QZZB'] => array(),
        IUserGroup::ID['QWXCB'] => array(),
        IUserGroup::ID['QJJJCW'] => array(),
        IUserGroup::ID['QWMB'] => array(),
        IUserGroup::ID['QWZFW'] => array(),
        IUserGroup::ID['QRMFY'] => array(),
        IUserGroup::ID['QJCY'] => array(),
        IUserGroup::ID['GAHXFJ'] => array(),
        IUserGroup::ID['QCZJ'] => array(),
        IUserGroup::ID['QKJJ'] => array(),
        IUserGroup::ID['QGZW'] => array(),
        IUserGroup::ID['QJYJ'] => array(),
        IUserGroup::ID['QSFJ'] => array(),
        IUserGroup::ID['QRLZYHSHBZJ'] => array(),
        IUserGroup::ID['QZJW'] => array(),
        IUserGroup::ID['QGSL'] => array(),
        IUserGroup::ID['QWLJ'] => array(),
        IUserGroup::ID['QSTHJJ'] => array(),
        IUserGroup::ID['QSWJ'] => array(),
        IUserGroup::ID['QHZJLB'] => array(),
        IUserGroup::ID['QMZJ'] => array(),
        IUserGroup::ID['QXWZX'] => array(),
        IUserGroup::ID['QWJW'] => array(),
        IUserGroup::ID['QYBJ'] => array(),
        IUserGroup::ID['QSWJ'] => array(),
        IUserGroup::ID['QTJJ'] => array(),
        IUserGroup::ID['QSCHZLJGJ'] => array(),
        IUserGroup::ID['QYJJ'] => array(),
        IUserGroup::ID['QJRJ'] => array(),
        IUserGroup::ID['QJGSWGLJ'] => array(),
        IUserGroup::ID['QWWXB'] => array(),
        IUserGroup::ID['QBB'] => array(),
        IUserGroup::ID['QSJJ'] => array(),
        IUserGroup::ID['GHHXFJ'] => array(),
        IUserGroup::ID['QCGW'] => array(),
        IUserGroup::ID['QTYJ'] => array(),
        IUserGroup::ID['QDAJ'] => array(),
        IUserGroup::ID['QZGH'] => array(),
        IUserGroup::ID['TQW'] => array(),
        IUserGroup::ID['QCL'] => array(),
        IUserGroup::ID['QMZB'] => array(),
        IUserGroup::ID['QGAJ'] => array(),
        IUserGroup::ID['QRFB'] => array(),
        IUserGroup::ID['QZSCQJ'] => array(),
        IUserGroup::ID['QWB'] => array(),
        IUserGroup::ID['QZFB'] => array(),
        IUserGroup::ID['QGHHZRZYJ'] => array()
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
