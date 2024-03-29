<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeRedBlackList
{
    const TYPE_RED_BLACK_LIST = array(
        IResourceCatalog::TYPE['NULL'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['XBXZCF'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['XBXZXK'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['TEST'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['JGJCDXZJL'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['YXQNZYZ'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['HRBXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['XSPJXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['QYRYXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['ZYJNZSXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['ZLJCQYXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['LYQXPDXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['CPTGLSZXCPRZMD'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['ESCJDPGJGHZZS'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['SHZZNJXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['QYGSZXXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['QYDSXZCFXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['AJNSRXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['XZXKQYXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['SYDWFRDJXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['HXQTYXHDJXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['DZDAGZZDWGRBZJL'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['TJSZLJDW'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['DTJXJGRXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['SXBZXJGXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['BLACK'],
        IResourceCatalog::TYPE['SXBZXRMD'] => ISearchableResourceCatalogData::RED_BLACK_LIST['BLACK'],
        IResourceCatalog::TYPE['YLBXXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['TJDCDXML'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['JDCWFXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['GTGSHXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['CMQYSBXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['YPLSQYXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['ZYZXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['XJFDPDXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['DYZGXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['LXSDJXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['YZTQSBXXHMD'] => ISearchableResourceCatalogData::RED_BLACK_LIST['BLACK'],
        IResourceCatalog::TYPE['JGRYXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['SXQYHMD'] => ISearchableResourceCatalogData::RED_BLACK_LIST['BLACK'],
        IResourceCatalog::TYPE['SPYPTSJBJLGR'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['SPYPTSJBJLDW'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['TJMPCPXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['JSZGXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['SJYXXS'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['SYBXXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['SJJXMXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['JYJGXINXI'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['GRRYXXJYJ'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['GRRYXXLFW'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['GRRYXXMZJ'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['QYYCMLXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['SBQYXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['SFJDJGDJXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['GZJGJBXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['GZYXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['JCFLFWSXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['JCFLFWGZZJBXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['LSSWSXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['LSZYZGZXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['QIYEJBXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['GZRYXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['YZTQNMGGZHMD'] => ISearchableResourceCatalogData::RED_BLACK_LIST['BLACK'],
        IResourceCatalog::TYPE['JGRYXXSJYJ'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['JGRYXXSSFJ'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['MBFQYML'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['SHTTDJXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['QYZXXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['QYDXXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['CCJCJGXX'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['JGRYXXSLFW'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['ZDSSWFAJXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['BLACK'],
        IResourceCatalog::TYPE['TJQYFRGGXYZHPJJG'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['XZJCXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['XZQZXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['HZSGXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['ZDHZYHXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['SCXYPJGKPJXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['SCXYPJLYXWXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['SCXYPJSHFWXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['FRQYNBXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['FRRYBZXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['FRTQSFXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['FRYDTQFXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['FRYDXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['FRYQJFXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['FRYQTQFXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['FRYSJIFXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        // IResourceCatalog::TYPE['TSGSJDJC'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        // IResourceCatalog::TYPE['TSGSXZQZ'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['ZRRRYBZXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['QYBGDJXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['QYNBXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['QYRJCZXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        // IResourceCatalog::TYPE['T_SGS_XZQR'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['XZCJ'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['XZJDJC'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['XZJL'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['XZQR'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['XZQZ'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['AJNSRMD'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['YCJYML'] => ISearchableResourceCatalogData::RED_BLACK_LIST['BLACK'],
        IResourceCatalog::TYPE['ZDSHWFAJMD'] => ISearchableResourceCatalogData::RED_BLACK_LIST['BLACK'],
        IResourceCatalog::TYPE['XZJF'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['T_HTLX_HTLXXX'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        //@position
    );
}
