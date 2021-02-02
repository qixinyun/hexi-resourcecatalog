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
        'TJSZLJDW' => 13,
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
        'TJMPCPXX' => 63,
        'QYYCMLXX' => 64,
        'QYZXXX' => 65,
        'QYDXXX' => 66,
        'CCJCJGXX' => 67,
        'SYDWFRDJXX' => 68,
        'XZXKQYXX' => 69,
        'HXQTYXHDJXX' => 70,
        'DZDAGZZDWGRBZJL' => 71,
        'YXQNZYZ' => 72,
        'TJQYFRGGXYZHPJJG' => 73,
'XZJCXX'=>74,
'XZQZXX'=>75,
'HZSGXX'=>76,
'ZDHZYHXX'=>77,
        //@position_type_78
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
            self::TYPE['SJJXMXX'],
            self::TYPE['TJQYFRGGXYZHPJJG'],
            self::TYPE['XZJCXX'],
            self::TYPE['XZQZXX']
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
            self::TYPE['ZFCGDLJGXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QKJJ'] => array(
            self::TYPE['TJSZLJDW']
        ),
        IUserGroup::ID['QGZW'] => array(
            self::TYPE['QYRYXX']
        ),
        IUserGroup::ID['QJYJ'] => array(
            self::TYPE['JSZGXX'],
            self::TYPE['SJYXXS'],
            self::TYPE['JYJGXINXI'],
            self::TYPE['GRRYXXJYJ'],
            self::TYPE['JGRYXXSJYJ'],
            self::TYPE['XZJCXX']
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
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QRLZYHSHBZJ'] => array(
            self::TYPE['ZYJNZSXX'],
            self::TYPE['YLBXXX'],
            self::TYPE['YZTQSBXXHMD'],
            self::TYPE['SYBXXX'],
            self::TYPE['SBQYXX'],
            self::TYPE['GZRYXX'],
            self::TYPE['YZTQNMGGZHMD'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QZJW'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX'],
            self::TYPE['ZLJCQYXX']
        ),
        IUserGroup::ID['QGSL'] => array(),
        IUserGroup::ID['QWLJ'] => array(
            self::TYPE['LYQXPDXX'],
            self::TYPE['XJFDPDXX'],
            self::TYPE['DYZGXX'],
            self::TYPE['LXSDJXX'],
            self::TYPE['GRRYXXLFW'],
            self::TYPE['JGRYXXSLFW'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QSTHJJ'] => array(
            self::TYPE['CPTGLSZXCPRZMD'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QSWJUN'] => array(
            self::TYPE['ESCJDPGJGHZZS'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QHZJLB'] => array(
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QMZJ'] => array(
            self::TYPE['SHZZNJXX'],
            self::TYPE['GRRYXXMZJ'],
            self::TYPE['MBFQYML'],
            self::TYPE['SHTTDJXX'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QXWZX'] => array(),
        IUserGroup::ID['QWJW'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QYBJ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QSWJ'] => array(
            self::TYPE['QYGSZXXX'],
            self::TYPE['AJNSRXX'],
            self::TYPE['ZDSSWFAJXX'],
            self::TYPE['QYDSXZCFXX']
        ),
        IUserGroup::ID['QTJJ'] => array(
            self::TYPE['DTJXJGRXX'],
            self::TYPE['TJDCDXML'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
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
            self::TYPE['TJMPCPXX'],
            self::TYPE['QYYCMLXX'],
            self::TYPE['QYZXXX'],
            self::TYPE['QYDXXX'],
            self::TYPE['CCJCJGXX'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QYJJ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QJRJ'] => array(),
        IUserGroup::ID['QJGSWGLJ'] => array(),
        IUserGroup::ID['QWWXB'] => array(),
        IUserGroup::ID['QBB'] => array(
            self::TYPE['SYDWFRDJXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QSJJ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['GHHXFJ'] => array(),
        IUserGroup::ID['QCGW'] => array(
            self::TYPE['XZXKQYXX'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QTYJ'] => array(
            self::TYPE['HXQTYXHDJXX'],
            self::TYPE['XZJCXX']
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
        IUserGroup::ID['QRFB'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QZSCQJ'] => array(),
        IUserGroup::ID['QWB'] => array(),
        IUserGroup::ID['QZFB'] => array(),
        IUserGroup::ID['QGHHZRZYJ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QXF'] => array(self::TYPE['ZDHZYHXX'],self::TYPE['HZSGXX'],self::TYPE['XZQZXX'],self::TYPE['XZJCXX']),
        IUserGroup::ID['CTZJ'] => array(self::TYPE['XZQZXX'],self::TYPE['XZJCXX']),
        IUserGroup::ID['DYMJ'] => array(self::TYPE['XZQZXX'],self::TYPE['XZJCXX']),
        IUserGroup::ID['DHJ'] => array(self::TYPE['XZQZXX'],self::TYPE['XZJCXX']),
        IUserGroup::ID['GJSJ'] => array(self::TYPE['XZQZXX'],self::TYPE['XZJCXX']),
        IUserGroup::ID['JSJ'] => array(self::TYPE['XZQZXX'],self::TYPE['XZJCXX']),
        IUserGroup::ID['LLJ'] => array(self::TYPE['XZQZXX'],self::TYPE['XZJCXX']),
        IUserGroup::ID['MCJ'] => array(self::TYPE['XZQZXX'],self::TYPE['XZJCXX']),
        IUserGroup::ID['MJJ'] => array(self::TYPE['XZQZXX'],self::TYPE['XZJCXX']),
        IUserGroup::ID['THLJ'] => array(self::TYPE['XZQZXX'],self::TYPE['XZJCXX']),
        IUserGroup::ID['TYJ'] => array(self::TYPE['XZQZXX'],self::TYPE['XZJCXX']),
        IUserGroup::ID['TTJ'] => array(self::TYPE['XZQZXX'],self::TYPE['XZJCXX']),
        IUserGroup::ID['XWFJ'] => array(self::TYPE['XZQZXX'],self::TYPE['XZJCXX']),
        IUserGroup::ID['YYLJ'] => array(self::TYPE['XZQZXX'],self::TYPE['XZJCXX']),
        IUserGroup::ID['YXLJ'] => array(self::TYPE['XZQZXX'],self::TYPE['XZJCXX'])
        //@position_usergroup
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
