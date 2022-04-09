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
        'SCXYPJGKPJXX'=>78,
        'SCXYPJLYXWXX'=>79,
        'SCXYPJSHFWXX'=>80,
        'FRQYNBXX'=>81,
        'FRRYBZXX'=>82,
        'FRTQSFXX'=>83,
        'FRYDTQFXX'=>84,
        'FRYDXX'=>85,
        'FRYQJFXX'=>86,
        'FRYQTQFXX'=>87,
        'FRYSJIFXX'=>88,
        'TSGSJDJC'=>89,
        'TSGSXZQZ'=>90,
        'ZRRRYBZXX'=>91,
        'QYBGDJXX'=>92,
        'QYNBXX'=>93,
        'QYRJCZXX'=>94,
        'T_SGS_XZQR'=>95,
        //@position_type_96
        'TEST' => 500
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK']
        ),
        IUserGroup::ID['QFGW'] => array(
            self::TYPE['T_SGS_XZQR'],
            self::TYPE['QYRJCZXX'],
            self::TYPE['QYNBXX'],
            self::TYPE['QYBGDJXX'],
            self::TYPE['TSGSXZQZ'],
            self::TYPE['FRYSJIFXX'],
            self::TYPE['FRYQTQFXX'],
            self::TYPE['FRYQJFXX'],
            self::TYPE['FRYDXX'],
            self::TYPE['FRYDTQFXX'],
            self::TYPE['FRTQSFXX'],
            self::TYPE['SCXYPJSHFWXX'],
            self::TYPE['SCXYPJLYXWXX'],
            self::TYPE['SCXYPJGKPJXX'],
            self::TYPE['TEST'],
            self::TYPE['JGJCDXZJL'],
            self::TYPE['SJJXMXX'],
            self::TYPE['TJQYFRGGXYZHPJJG'],
            self::TYPE['TSGSJDJC'],
        ),
        IUserGroup::ID['QZZB'] => array(
            self::TYPE['ZRRRYBZXX'],
            self::TYPE['FRRYBZXX'],
        ),
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
            self::TYPE['TSGSJDJC'],
            self::TYPE['T_SGS_XZQR']
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
            self::TYPE['TSGSJDJC']
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
            self::TYPE['TSGSJDJC']
        ),
        IUserGroup::ID['QRLZYHSHBZJ'] => array(
            self::TYPE['ZYJNZSXX'],
            self::TYPE['YLBXXX'],
            self::TYPE['YZTQSBXXHMD'],
            self::TYPE['SYBXXX'],
            self::TYPE['SBQYXX'],
            self::TYPE['GZRYXX'],
            self::TYPE['YZTQNMGGZHMD'],
            self::TYPE['TSGSJDJC'],
            self::TYPE['T_SGS_XZQR']
        ),
        IUserGroup::ID['QZJW'] => array(
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC'],
            self::TYPE['ZLJCQYXX'],
            self::TYPE['T_SGS_XZQR']
        ),
        IUserGroup::ID['QGSL'] => array(),
        IUserGroup::ID['QWLJ'] => array(
            self::TYPE['LYQXPDXX'],
            self::TYPE['XJFDPDXX'],
            self::TYPE['DYZGXX'],
            self::TYPE['LXSDJXX'],
            self::TYPE['GRRYXXLFW'],
            self::TYPE['JGRYXXSLFW'],
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC']
        ),
        IUserGroup::ID['QSTHJJ'] => array(
            self::TYPE['CPTGLSZXCPRZMD'],
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC']
        ),
        IUserGroup::ID['QSWJUN'] => array(
            self::TYPE['ESCJDPGJGHZZS'],
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC']
        ),
        IUserGroup::ID['QHZJLB'] => array(
            self::TYPE['TSGSJDJC']
        ),
        IUserGroup::ID['QMZJ'] => array(
            self::TYPE['SHZZNJXX'],
            self::TYPE['GRRYXXMZJ'],
            self::TYPE['MBFQYML'],
            self::TYPE['SHTTDJXX'],
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC'],
            self::TYPE['T_SGS_XZQR']
        ),
        IUserGroup::ID['QXWZX'] => array(),
        IUserGroup::ID['QWJW'] => array(
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC'],
            self::TYPE['T_SGS_XZQR']
        ),
        IUserGroup::ID['QYBJ'] => array(
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC']
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
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC']
        ),
        IUserGroup::ID['QSCHZLJGJ'] => array(
            self::TYPE['FRQYNBXX'],
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
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC'],
            self::TYPE['T_SGS_XZQR']
        ),
        IUserGroup::ID['QYJJ'] => array(
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC']
        ),
        IUserGroup::ID['QJRJ'] => array(),
        IUserGroup::ID['QJGSWGLJ'] => array(),
        IUserGroup::ID['QWWXB'] => array(),
        IUserGroup::ID['QBB'] => array(
            self::TYPE['TSGSJDJC'],
            self::TYPE['SYDWFRDJXX'],
        ),
        IUserGroup::ID['QSJJ'] => array(
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC']
        ),
        IUserGroup::ID['GHHXFJ'] => array(),
        IUserGroup::ID['QCGW'] => array(
            self::TYPE['XZXKQYXX'],
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC']
        ),
        IUserGroup::ID['QTYJ'] => array(
            self::TYPE['HXQTYXHDJXX'],
            self::TYPE['TSGSJDJC'],
            self::TYPE['T_SGS_XZQR']
        ),
        IUserGroup::ID['QDAJ'] => array(
            self::TYPE['DZDAGZZDWGRBZJL']
        ),
        IUserGroup::ID['QZGH'] => array(
            self::TYPE['FRRYBZXX'],
            self::TYPE['ZRRRYBZXX']
        ),
        IUserGroup::ID['TQW'] => array(
            self::TYPE['YXQNZYZ']
        ),
        IUserGroup::ID['QCL'] => array(),
        IUserGroup::ID['QMZB'] => array(),
        IUserGroup::ID['QGAJ'] => array(),
        IUserGroup::ID['QRFB'] => array(
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC']
        ),
        IUserGroup::ID['QZSCQJ'] => array(),
        IUserGroup::ID['QWB'] => array(
            self::TYPE['T_SGS_XZQR']
        ),
        IUserGroup::ID['QZFB'] => array(),
        IUserGroup::ID['QGHHZRZYJ'] => array(
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC']
        ),
        IUserGroup::ID['QXF'] => array(
            self::TYPE['ZDHZYHXX'],
            self::TYPE['HZSGXX'],
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC']
        ),
        IUserGroup::ID['CTZJ'] => array(
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC'],
            self::TYPE['T_SGS_XZQR']
        ),
        IUserGroup::ID['DYMJ'] => array(
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC'],
            self::TYPE['T_SGS_XZQR']
        ),
        IUserGroup::ID['DHJ'] => array(
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC'],
            self::TYPE['T_SGS_XZQR']
        ),
        IUserGroup::ID['GJSJ'] => array(
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC'],
            self::TYPE['T_SGS_XZQR']
        ),
        IUserGroup::ID['JSJ'] => array(
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC'],
            self::TYPE['T_SGS_XZQR']
        ),
        IUserGroup::ID['LLJ'] => array(
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC'],
            self::TYPE['T_SGS_XZQR']
        ),
        IUserGroup::ID['MCJ'] => array(
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC'],
            self::TYPE['T_SGS_XZQR']
        ),
        IUserGroup::ID['MJJ'] => array(
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC'],
            self::TYPE['T_SGS_XZQR']
        ),
        IUserGroup::ID['THLJ'] => array(
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC'],
            self::TYPE['T_SGS_XZQR']
        ),
        IUserGroup::ID['TYJ'] => array(
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC'],
            self::TYPE['T_SGS_XZQR']
        ),
        IUserGroup::ID['TTJ'] => array(
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC'],
            self::TYPE['T_SGS_XZQR']
        ),
        IUserGroup::ID['XWFJ'] => array(
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC'],
            self::TYPE['T_SGS_XZQR']
        ),
        IUserGroup::ID['YYLJ'] => array(
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC'],
            self::TYPE['T_SGS_XZQR']
        ),
        IUserGroup::ID['YXLJ'] => array(
            self::TYPE['TSGSXZQZ'],
            self::TYPE['TSGSJDJC'],
            self::TYPE['T_SGS_XZQR']
        ),
        IUserGroup::ID['QTZB'] => array(
            self::TYPE['T_SGS_XZQR']
        ),
        IUserGroup::ID['QBMJ'] => array(
            self::TYPE['T_SGS_XZQR']
        ),
        //@position_usergroup
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
