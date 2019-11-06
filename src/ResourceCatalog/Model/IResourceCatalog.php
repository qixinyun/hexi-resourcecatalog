<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList, IResourceCatalogIsConfirm
{   
    const TYPE = array(
        'NULL' => 0,
        'XBXZCF' => 1,
        'XBXZXK' => 2,
        'JGJCDXZJL' => 3,
        'SJJXMXX' => 4,
        'HRBXX' => 5,
        'ZYZXX' => 6,
        'XSPJXX' => 7,
        'SXBZXJGXX' => 8,
        'SXBZXRMD' => 9,
        'YSCRJZJJJZGRDXX' => 10,
        'JDCWFXX' => 11,
        'ZFCGDLJGXX' => 12,
        'JXSZLJDW' => 13,
        'QYRYXX' => 14,
        'JSZGXX' => 15,
        'SJYXXS' => 16,
        'JYJGXINXI' => 17,
        'GRRYXXJYJ' => 18,
        'JGRYXXSJYJ' => 19,
        'SFJDJGCYRYZGXX' => 20,
        'SFJDJGDJXX' => 21,
        'GZJGJBXX' => 22,
        'GZYXX' => 23,
        'JCFLFWSXX' => 24,
        'JCFLFWGZZJBXX' => 25,
        'LSSWSXX' => 26,
        'LSZYZGZXX' => 27,
        'JGRYXXSSFJ' => 28,
        'ZYJNZSXX' => 29,
        'YLBXXX' => 30,
        'YZTQSBXXHMD' => 31,
        'SYBXXX' => 32,
        'SBQYXX' => 33,
        'GZRYXX' => 34,
        'YZTQNMGGZHMD' => 35,
        'ZLJCQYXX' => 36,
        'LYQXPDXX' => 37,
        'XJFDPDXX' => 38,
        'DYZGXX' => 39,
        'LXSDJXX' => 40,
        'GRRYXXLFW' => 41,
        'JGRYXXSLFW' => 42,
        'CPTGLSZXCPRZMD' => 43,
        'ESCJDPGJGHZZS' => 44,
        'SHZZNJXX' => 45,
        'GRRYXXMZJ' => 46,
        'MBFQYML' => 47,
        'SHTTDJXX' => 48,
        'QYGSZXXX' => 49,
        'AJNSRXX' => 50,
        'ZDSSWFAJXX' => 51,
        'QYDSXZCFXX' => 52,
        'DTJXJGRXX' => 53,
        'TJDCDXML' => 54,
        'QIYEJBXX' => 55,
        'GTGSHXX' => 56,
        'CMQYSBXX' => 57,
        'YPLSQYXX' => 58,
        'JGRYXX' => 59,
        'SXQYHMD' => 60,
        'SPYPTSJBJLGR' => 61,
        'SPYPTSJBJLDW' => 62,
        'JXMPCPXX' => 63,
        'QYYCMLXX' => 64,
        'QYZXXX' => 65,
        'QYDXXX' => 66,
        'CCJCJGXX' => 67,
        'SYDWFRDJXX' => 68,
        'XZXKQYXX' => 69,
        'PXSTYXHDJXX' => 70,
        'DZDAGZZDWGRBZJL' => 71,
        'YXQNZYZ' => 72,
        'TEST' => 500
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK']
        ),
        IUserGroup::ID['QFGW'] => array(
            self::TYPE['TEST'],
            self::TYPE['JGJCDXZJL'],
            self::TYPE['SJJXMXX']
        ),
        IUserGroup::ID['QZZB'] => array(),
        IUserGroup::ID['QWXCB'] => array(),
        IUserGroup::ID['QJJJCW'] => array(),
        IUserGroup::ID['QWMB'] => array(
            self::TYPE['HRBXX'],
            self::TYPE['ZYZXX']
        ),
        IUserGroup::ID['QWZFW'] => array(),
        IUserGroup::ID['QRMFY'] => array(
            self::TYPE['XSPJXX'],
            self::TYPE['SXBZXJGXX'],
            self::TYPE['SXBZXRMD']
        ),
        IUserGroup::ID['QJCY'] => array(),
        IUserGroup::ID['GAHXFJ'] => array(
            self::TYPE['YSCRJZJJJZGRDXX'],
            self::TYPE['JDCWFXX']
        ),
        IUserGroup::ID['QCZJ'] => array(
            self::TYPE['ZFCGDLJGXX']
        ),
        IUserGroup::ID['QKJJ'] => array(
            self::TYPE['JXSZLJDW']
        ),
        IUserGroup::ID['QGZW'] => array(
            self::TYPE['QYRYXX']
        ),
        IUserGroup::ID['QJYJ'] => array(
            self::TYPE['JSZGXX'],
            self::TYPE['SJYXXS'],
            self::TYPE['JYJGXINXI'],
            self::TYPE['GRRYXXJYJ'],
            self::TYPE['JGRYXXSJYJ']
        ),
        IUserGroup::ID['QSFJ'] => array(
            self::TYPE['SFJDJGCYRYZGXX'],
            self::TYPE['SFJDJGDJXX'],
            self::TYPE['GZJGJBXX'],
            self::TYPE['GZYXX'],
            self::TYPE['JCFLFWSXX'],
            self::TYPE['JCFLFWGZZJBXX'],
            self::TYPE['LSSWSXX'],
            self::TYPE['LSZYZGZXX'],
            self::TYPE['JGRYXXSSFJ'],
        ),
        IUserGroup::ID['QRLZYHSHBZJ'] => array(
            self::TYPE['ZYJNZSXX'],
            self::TYPE['YLBXXX'],
            self::TYPE['YZTQSBXXHMD'],
            self::TYPE['SYBXXX'],
            self::TYPE['SBQYXX'],
            self::TYPE['GZRYXX'],
            self::TYPE['YZTQNMGGZHMD']
        ),
        IUserGroup::ID['QZJW'] => array(
            self::TYPE['ZLJCQYXX']
        ),
        IUserGroup::ID['QGSL'] => array(),
        IUserGroup::ID['QWLJ'] => array(
            self::TYPE['LYQXPDXX'],
            self::TYPE['XJFDPDXX'],
            self::TYPE['DYZGXX'],
            self::TYPE['LXSDJXX'],
            self::TYPE['GRRYXXLFW'],
            self::TYPE['JGRYXXSLFW']
        ),
        IUserGroup::ID['QSTHJJ'] => array(
            self::TYPE['CPTGLSZXCPRZMD']
        ),
        IUserGroup::ID['QSWJUN'] => array(
            self::TYPE['ESCJDPGJGHZZS']
        ),
        IUserGroup::ID['QHZJLB'] => array(),
        IUserGroup::ID['QMZJ'] => array(
            self::TYPE['SHZZNJXX'],
            self::TYPE['GRRYXXMZJ'],
            self::TYPE['MBFQYML'],
            self::TYPE['SHTTDJXX']
        ),
        IUserGroup::ID['QXWZX'] => array(),
        IUserGroup::ID['QWJW'] => array(),
        IUserGroup::ID['QYBJ'] => array(),
        IUserGroup::ID['QSWJ'] => array(
            self::TYPE['QYGSZXXX'],
            self::TYPE['AJNSRXX'],
            self::TYPE['ZDSSWFAJXX'],
            self::TYPE['QYDSXZCFXX']
        ),
        IUserGroup::ID['QTJJ'] => array(
            self::TYPE['DTJXJGRXX'],
            self::TYPE['TJDCDXML']
        ),
        IUserGroup::ID['QSCHZLJGJ'] => array(
            self::TYPE['QIYEJBXX'],
            self::TYPE['GTGSHXX'],
            self::TYPE['CMQYSBXX'],
            self::TYPE['YPLSQYXX'],
            self::TYPE['JGRYXX'],
            self::TYPE['SXQYHMD'],
            self::TYPE['SPYPTSJBJLGR'],
            self::TYPE['SPYPTSJBJLDW'],
            self::TYPE['JXMPCPXX'],
            self::TYPE['QYYCMLXX'],
            self::TYPE['QYZXXX'],
            self::TYPE['QYDXXX'],
            self::TYPE['CCJCJGXX']
        ),
        IUserGroup::ID['QYJJ'] => array(),
        IUserGroup::ID['QJRJ'] => array(),
        IUserGroup::ID['QJGSWGLJ'] => array(),
        IUserGroup::ID['QWWXB'] => array(),
        IUserGroup::ID['QBB'] => array(
            self::TYPE['SYDWFRDJXX']
        ),
        IUserGroup::ID['QSJJ'] => array(),
        IUserGroup::ID['GHHXFJ'] => array(),
        IUserGroup::ID['QCGW'] => array(
            self::TYPE['XZXKQYXX']
        ),
        IUserGroup::ID['QTYJ'] => array(
            self::TYPE['PXSTYXHDJXX']
        ),
        IUserGroup::ID['QDAJ'] => array(
            self::TYPE['DZDAGZZDWGRBZJL']
        ),
        IUserGroup::ID['QZGH'] => array(),
        IUserGroup::ID['TQW'] => array(
            self::TYPE['YXQNZYZ']
        ),
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
