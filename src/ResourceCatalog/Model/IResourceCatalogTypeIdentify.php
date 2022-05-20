<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeIdentify
{
    const TYPE_IDENTIFY = array(
        IResourceCatalog::TYPE['NULL'] => '',
        IResourceCatalog::TYPE['XBXZCF'] => 'XBXZCF',
        IResourceCatalog::TYPE['XBXZXK'] => 'XBXZXK',
        IResourceCatalog::TYPE['TEST'] => 'TEST',
        IResourceCatalog::TYPE['JGJCDXZJL'] => 'JGJCDXZJL',
        IResourceCatalog::TYPE['YXQNZYZ'] => 'YXQNZYZ',
        IResourceCatalog::TYPE['HRBXX'] => 'HRBXX',
        IResourceCatalog::TYPE['XSPJXX'] => 'XSPJXX',
        IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => 'YSCRJZJJJZGRDXX',
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => 'ZFCGDLJGXX',
        IResourceCatalog::TYPE['QYRYXX'] => 'QYRYXX',
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => 'SFJDJGCYRYZGXX',
        IResourceCatalog::TYPE['ZYJNZSXX'] => 'ZYJNZSXX',
        IResourceCatalog::TYPE['ZLJCQYXX'] => 'ZLJCQYXX',
        IResourceCatalog::TYPE['LYQXPDXX'] => 'LYQXPDXX',
        IResourceCatalog::TYPE['CPTGLSZXCPRZMD'] => 'CPTGLSZXCPRZMD',
        IResourceCatalog::TYPE['ESCJDPGJGHZZS'] => 'ESCJDPGJGHZZS',
        IResourceCatalog::TYPE['SHZZNJXX'] => 'SHZZNJXX',
        IResourceCatalog::TYPE['QYGSZXXX'] => 'QYGSZXXX',
        IResourceCatalog::TYPE['QYDSXZCFXX'] => 'QYDSXZCFXX',
        IResourceCatalog::TYPE['AJNSRXX'] => 'AJNSRXX',
        IResourceCatalog::TYPE['XZXKQYXX'] => 'XZXKQYXX',
        IResourceCatalog::TYPE['SYDWFRDJXX'] => 'SYDWFRDJXX',
        IResourceCatalog::TYPE['HXQTYXHDJXX'] => 'HXQTYXHDJXX',
        IResourceCatalog::TYPE['DZDAGZZDWGRBZJL'] => 'DZDAGZZDWGRBZJL',
        IResourceCatalog::TYPE['TJSZLJDW'] => 'TJSZLJDW',
        IResourceCatalog::TYPE['DTJXJGRXX'] => 'DTJXJGRXX',
        IResourceCatalog::TYPE['SXBZXJGXX'] => 'SXBZXJGXX',
        IResourceCatalog::TYPE['SXBZXRMD'] => 'SXBZXRMD',
        IResourceCatalog::TYPE['YLBXXX'] => 'YLBXXX',
        IResourceCatalog::TYPE['TJDCDXML'] => 'TJDCDXML',
        IResourceCatalog::TYPE['JDCWFXX'] => 'JDCWFXX',
        IResourceCatalog::TYPE['GTGSHXX'] => 'GTGSHXX',
        IResourceCatalog::TYPE['CMQYSBXX'] => 'CMQYSBXX',
        IResourceCatalog::TYPE['YPLSQYXX'] => 'YPLSQYXX',
        IResourceCatalog::TYPE['ZYZXX'] => 'ZYZXX',
        IResourceCatalog::TYPE['XJFDPDXX'] => 'XJFDPDXX',
        IResourceCatalog::TYPE['DYZGXX'] => 'DYZGXX',
        IResourceCatalog::TYPE['LXSDJXX'] => 'LXSDJXX',
        IResourceCatalog::TYPE['YZTQSBXXHMD'] => 'YZTQSBXXHMD',
        IResourceCatalog::TYPE['JGRYXX'] => 'JGRYXX',
        IResourceCatalog::TYPE['SXQYHMD'] => 'SXQYHMD',
        IResourceCatalog::TYPE['SPYPTSJBJLGR'] => 'SPYPTSJBJLGR',
        IResourceCatalog::TYPE['SPYPTSJBJLDW'] => 'SPYPTSJBJLDW',
        IResourceCatalog::TYPE['TJMPCPXX'] => 'TJMPCPXX',
        IResourceCatalog::TYPE['JSZGXX'] => 'JSZGXX',
        IResourceCatalog::TYPE['SJYXXS'] => 'SJYXXS',
        IResourceCatalog::TYPE['SYBXXX'] => 'SYBXXX',
        IResourceCatalog::TYPE['SJJXMXX'] => 'SJJXMXX',
        IResourceCatalog::TYPE['JYJGXINXI'] => 'JYJGXINXI',
        IResourceCatalog::TYPE['GRRYXXJYJ'] => 'GRRYXXJYJ',
        IResourceCatalog::TYPE['GRRYXXLFW'] => 'GRRYXXLFW',
        IResourceCatalog::TYPE['GRRYXXMZJ'] => 'GRRYXXMZJ',
        IResourceCatalog::TYPE['QYYCMLXX'] => 'QYYCMLXX',
        IResourceCatalog::TYPE['SBQYXX'] => 'SBQYXX',
        IResourceCatalog::TYPE['SFJDJGDJXX'] => 'SFJDJGDJXX',
        IResourceCatalog::TYPE['GZJGJBXX'] => 'GZJGJBXX',
        IResourceCatalog::TYPE['GZYXX'] => 'GZYXX',
        IResourceCatalog::TYPE['JCFLFWSXX'] => 'JCFLFWSXX',
        IResourceCatalog::TYPE['JCFLFWGZZJBXX'] => 'JCFLFWGZZJBXX',
        IResourceCatalog::TYPE['LSSWSXX'] => 'LSSWSXX',
        IResourceCatalog::TYPE['LSZYZGZXX'] => 'LSZYZGZXX',
        IResourceCatalog::TYPE['QIYEJBXX'] => 'QIYEJBXX',
        IResourceCatalog::TYPE['GZRYXX'] => 'GZRYXX',
        IResourceCatalog::TYPE['YZTQNMGGZHMD'] => 'YZTQNMGGZHMD',
        IResourceCatalog::TYPE['JGRYXXSJYJ'] => 'JGRYXXSJYJ',
        IResourceCatalog::TYPE['JGRYXXSSFJ'] => 'JGRYXXSSFJ',
        IResourceCatalog::TYPE['MBFQYML'] => 'MBFQYML',
        IResourceCatalog::TYPE['SHTTDJXX'] => 'SHTTDJXX',
        IResourceCatalog::TYPE['QYZXXX'] => 'QYZXXX',
        IResourceCatalog::TYPE['QYDXXX'] => 'QYDXXX',
        IResourceCatalog::TYPE['CCJCJGXX'] => 'CCJCJGXX',
        IResourceCatalog::TYPE['JGRYXXSLFW'] => 'JGRYXXSLFW',
        IResourceCatalog::TYPE['ZDSSWFAJXX'] => 'ZDSSWFAJXX',
        IResourceCatalog::TYPE['TJQYFRGGXYZHPJJG'] => 'TJQYFRGGXYZHPJJG',
        IResourceCatalog::TYPE['XZJCXX'] => 'XZJCXX',
        // IResourceCatalog::TYPE['XZQZXX'] => 'XZQZXX',
        IResourceCatalog::TYPE['HZSGXX'] => 'HZSGXX',
        IResourceCatalog::TYPE['ZDHZYHXX'] => 'ZDHZYHXX',
        IResourceCatalog::TYPE['SCXYPJGKPJXX'] => 'SCXYPJGKPJXX',
        IResourceCatalog::TYPE['SCXYPJLYXWXX'] => 'SCXYPJLYXWXX',
        IResourceCatalog::TYPE['SCXYPJSHFWXX'] => 'SCXYPJSHFWXX',
        IResourceCatalog::TYPE['FRQYNBXX'] => 'FRQYNBXX',
        IResourceCatalog::TYPE['FRRYBZXX'] => 'FRRYBZXX',
        IResourceCatalog::TYPE['FRTQSFXX'] => 'FRTQSFXX',
        IResourceCatalog::TYPE['FRYDTQFXX'] => 'FRYDTQFXX',
        IResourceCatalog::TYPE['FRYDXX'] => 'FRYDXX',
        IResourceCatalog::TYPE['FRYQJFXX'] => 'FRYQJFXX',
        IResourceCatalog::TYPE['FRYQTQFXX'] => 'FRYQTQFXX',
        IResourceCatalog::TYPE['FRYSJIFXX'] => 'FRYSJIFXX',
        IResourceCatalog::TYPE['TSGSJDJC'] => 'TSGSJDJC',
        // IResourceCatalog::TYPE['TSGSXZQZ'] => 'TSGSXZQZ',
        IResourceCatalog::TYPE['ZRRRYBZXX'] => 'ZRRRYBZXX',
        IResourceCatalog::TYPE['QYBGDJXX'] => 'QYBGDJXX',
        IResourceCatalog::TYPE['QYNBXX'] => 'QYNBXX',
        IResourceCatalog::TYPE['QYRJCZXX'] => 'QYRJCZXX',
        // IResourceCatalog::TYPE['T_SGS_XZQR'] => 'T_SGS_XZQR',
        IResourceCatalog::TYPE['XZCJ'] => 'XZCJ',
        IResourceCatalog::TYPE['XZJDJC'] => 'XZJDJC',
        IResourceCatalog::TYPE['XZJL'] => 'XZJL',
        IResourceCatalog::TYPE['XZQR'] => 'XZQR',
        IResourceCatalog::TYPE['XZQZ'] => 'XZQZ',
        //@position
    );
}
