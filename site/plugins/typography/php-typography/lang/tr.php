<?php

/*
	Project: wp-Typography
	Project URI: https://code.mundschenk.at/wp-typography/

	File modified to place pattern and exceptions in arrays that can be understood in php files.
	This file is released under the same copyright as the below referenced original file
	Original unmodified file is available at: http://ctan.mirrorcatalogs.com/language/hyph-utf8/tex/generic/hyph-utf8/patterns/tex/
	Original file name: hyph-tr.tex

//============================================================================================================
	ORIGINAL FILE INFO

		% hyph-tr.tex
		%
		% Turkish hyphenation patterns
		%
		% This file is auto-generated from source/generic/hyph-utf8/languages/tr/generate_patterns_tr.rb that is part of hyph-utf8.
		% Please don't modify this file; modify the generating script instead.
		%
		% Copyright (C) 1987 Pierre A. MacKay
		%               2008, 2011 TUG
		%
		% This program can redistributed and/or modified under the terms
		% of the LaTeX Project Public License Distributed from CTAN
		% archives in directory macros/latex/base/lppl.txt; either
		% version 1 of the License, or (at your option) any later version.
		%
		% Credits:
		% - algorithm developed by P. A. MacKay for the Ottoman Texts Project in 1987
		% - rules adapted for modern Turkish by H. Turgut Uyar <uyar at itu.edu.tr>
		% - initiative to improve Turkish patterns by S. Ekin Kocabas <kocabas at stanford.edu>
		% - script written by Mojca Miklavec <mojca.miklavec.lists at gmail.com> in June 2008
		%
		% See also:
		% - http://mirror.ctan.org/language/turkish/hyphen/turk_hyf.c
		% - http://www.tug.org/TUGboat/Articles/tb09-1/tb20mackay.pdf
		%
		% Differences with Ottoman patterns:
		% - adapted for the use on modern TeX engines, using UTF-8 charactes
		% - only letters for Modern Turkish + âîû (the first one often needed, the other two don't hurt)
		% - (if needed, support for Ottoman Turkish might be provided separately under language code 'ota')
		%
		% Changes:
		% - 2008-06-25/27/28 - create this file by adapting Ottoman rules for modern Turkish
		% - 2011-08-10 - add LPPL licence with permission of Pierre A. MacKay
		%


//============================================================================================================

*/

$patgenLanguage = 'Turkish';

$patgenExceptions = array();

$patgenMaxSeg = 5;

$patgen = array(
	'begin' => array(	),

	'end' => array(
		'ecek'	=>	'22000',
	),

	'all' => array(
		'a'	=>	'21',
		'â'	=>	'21',
		'e'	=>	'21',
		'ı'	=>	'21',
		'i'	=>	'21',
		'î'	=>	'21',
		'o'	=>	'21',
		'ö'	=>	'21',
		'u'	=>	'21',
		'ü'	=>	'21',
		'û'	=>	'21',
		'b'	=>	'11',
		'c'	=>	'11',
		'ç'	=>	'11',
		'd'	=>	'11',
		'f'	=>	'11',
		'g'	=>	'11',
		'ğ'	=>	'11',
		'h'	=>	'11',
		'j'	=>	'11',
		'k'	=>	'11',
		'l'	=>	'11',
		'm'	=>	'11',
		'n'	=>	'11',
		'p'	=>	'11',
		'r'	=>	'11',
		's'	=>	'11',
		'ş'	=>	'11',
		't'	=>	'11',
		'v'	=>	'11',
		'y'	=>	'11',
		'z'	=>	'11',
		'bb'	=>	'200',
		'bc'	=>	'200',
		'bç'	=>	'200',
		'bd'	=>	'200',
		'bf'	=>	'200',
		'bg'	=>	'200',
		'bğ'	=>	'200',
		'bh'	=>	'200',
		'bj'	=>	'200',
		'bk'	=>	'200',
		'bl'	=>	'200',
		'bm'	=>	'200',
		'bn'	=>	'200',
		'bp'	=>	'200',
		'br'	=>	'200',
		'bs'	=>	'200',
		'bş'	=>	'200',
		'bt'	=>	'200',
		'bv'	=>	'200',
		'by'	=>	'200',
		'bz'	=>	'200',
		'cb'	=>	'200',
		'cc'	=>	'200',
		'cç'	=>	'200',
		'cd'	=>	'200',
		'cf'	=>	'200',
		'cg'	=>	'200',
		'cğ'	=>	'200',
		'ch'	=>	'200',
		'cj'	=>	'200',
		'ck'	=>	'200',
		'cl'	=>	'200',
		'cm'	=>	'200',
		'cn'	=>	'200',
		'cp'	=>	'200',
		'cr'	=>	'200',
		'cs'	=>	'200',
		'cş'	=>	'200',
		'ct'	=>	'200',
		'cv'	=>	'200',
		'cy'	=>	'200',
		'cz'	=>	'200',
		'çb'	=>	'200',
		'çc'	=>	'200',
		'çç'	=>	'200',
		'çd'	=>	'200',
		'çf'	=>	'200',
		'çg'	=>	'200',
		'çğ'	=>	'200',
		'çh'	=>	'200',
		'çj'	=>	'200',
		'çk'	=>	'200',
		'çl'	=>	'200',
		'çm'	=>	'200',
		'çn'	=>	'200',
		'çp'	=>	'200',
		'çr'	=>	'200',
		'çs'	=>	'200',
		'çş'	=>	'200',
		'çt'	=>	'200',
		'çv'	=>	'200',
		'çy'	=>	'200',
		'çz'	=>	'200',
		'db'	=>	'200',
		'dc'	=>	'200',
		'dç'	=>	'200',
		'dd'	=>	'200',
		'df'	=>	'200',
		'dg'	=>	'200',
		'dğ'	=>	'200',
		'dh'	=>	'200',
		'dj'	=>	'200',
		'dk'	=>	'200',
		'dl'	=>	'200',
		'dm'	=>	'200',
		'dn'	=>	'200',
		'dp'	=>	'200',
		'dr'	=>	'200',
		'ds'	=>	'200',
		'dş'	=>	'200',
		'dt'	=>	'200',
		'dv'	=>	'200',
		'dy'	=>	'200',
		'dz'	=>	'200',
		'fb'	=>	'200',
		'fc'	=>	'200',
		'fç'	=>	'200',
		'fd'	=>	'200',
		'ff'	=>	'200',
		'fg'	=>	'200',
		'fğ'	=>	'200',
		'fh'	=>	'200',
		'fj'	=>	'200',
		'fk'	=>	'200',
		'fl'	=>	'200',
		'fm'	=>	'200',
		'fn'	=>	'200',
		'fp'	=>	'200',
		'fr'	=>	'200',
		'fs'	=>	'200',
		'fş'	=>	'200',
		'ft'	=>	'200',
		'fv'	=>	'200',
		'fy'	=>	'200',
		'fz'	=>	'200',
		'gb'	=>	'200',
		'gc'	=>	'200',
		'gç'	=>	'200',
		'gd'	=>	'200',
		'gf'	=>	'200',
		'gg'	=>	'200',
		'gğ'	=>	'200',
		'gh'	=>	'200',
		'gj'	=>	'200',
		'gk'	=>	'200',
		'gl'	=>	'200',
		'gm'	=>	'200',
		'gn'	=>	'200',
		'gp'	=>	'200',
		'gr'	=>	'200',
		'gs'	=>	'200',
		'gş'	=>	'200',
		'gt'	=>	'200',
		'gv'	=>	'200',
		'gy'	=>	'200',
		'gz'	=>	'200',
		'ğb'	=>	'200',
		'ğc'	=>	'200',
		'ğç'	=>	'200',
		'ğd'	=>	'200',
		'ğf'	=>	'200',
		'ğg'	=>	'200',
		'ğğ'	=>	'200',
		'ğh'	=>	'200',
		'ğj'	=>	'200',
		'ğk'	=>	'200',
		'ğl'	=>	'200',
		'ğm'	=>	'200',
		'ğn'	=>	'200',
		'ğp'	=>	'200',
		'ğr'	=>	'200',
		'ğs'	=>	'200',
		'ğş'	=>	'200',
		'ğt'	=>	'200',
		'ğv'	=>	'200',
		'ğy'	=>	'200',
		'ğz'	=>	'200',
		'hb'	=>	'200',
		'hc'	=>	'200',
		'hç'	=>	'200',
		'hd'	=>	'200',
		'hf'	=>	'200',
		'hg'	=>	'200',
		'hğ'	=>	'200',
		'hh'	=>	'200',
		'hj'	=>	'200',
		'hk'	=>	'200',
		'hl'	=>	'200',
		'hm'	=>	'200',
		'hn'	=>	'200',
		'hp'	=>	'200',
		'hr'	=>	'200',
		'hs'	=>	'200',
		'hş'	=>	'200',
		'ht'	=>	'200',
		'hv'	=>	'200',
		'hy'	=>	'200',
		'hz'	=>	'200',
		'jb'	=>	'200',
		'jc'	=>	'200',
		'jç'	=>	'200',
		'jd'	=>	'200',
		'jf'	=>	'200',
		'jg'	=>	'200',
		'jğ'	=>	'200',
		'jh'	=>	'200',
		'jj'	=>	'200',
		'jk'	=>	'200',
		'jl'	=>	'200',
		'jm'	=>	'200',
		'jn'	=>	'200',
		'jp'	=>	'200',
		'jr'	=>	'200',
		'js'	=>	'200',
		'jş'	=>	'200',
		'jt'	=>	'200',
		'jv'	=>	'200',
		'jy'	=>	'200',
		'jz'	=>	'200',
		'kb'	=>	'200',
		'kc'	=>	'200',
		'kç'	=>	'200',
		'kd'	=>	'200',
		'kf'	=>	'200',
		'kg'	=>	'200',
		'kğ'	=>	'200',
		'kh'	=>	'200',
		'kj'	=>	'200',
		'kk'	=>	'200',
		'kl'	=>	'200',
		'km'	=>	'200',
		'kn'	=>	'200',
		'kp'	=>	'200',
		'kr'	=>	'200',
		'ks'	=>	'200',
		'kş'	=>	'200',
		'kt'	=>	'200',
		'kv'	=>	'200',
		'ky'	=>	'200',
		'kz'	=>	'200',
		'lb'	=>	'200',
		'lc'	=>	'200',
		'lç'	=>	'200',
		'ld'	=>	'200',
		'lf'	=>	'200',
		'lg'	=>	'200',
		'lğ'	=>	'200',
		'lh'	=>	'200',
		'lj'	=>	'200',
		'lk'	=>	'200',
		'll'	=>	'200',
		'lm'	=>	'200',
		'ln'	=>	'200',
		'lp'	=>	'200',
		'lr'	=>	'200',
		'ls'	=>	'200',
		'lş'	=>	'200',
		'lt'	=>	'200',
		'lv'	=>	'200',
		'ly'	=>	'200',
		'lz'	=>	'200',
		'mb'	=>	'200',
		'mc'	=>	'200',
		'mç'	=>	'200',
		'md'	=>	'200',
		'mf'	=>	'200',
		'mg'	=>	'200',
		'mğ'	=>	'200',
		'mh'	=>	'200',
		'mj'	=>	'200',
		'mk'	=>	'200',
		'ml'	=>	'200',
		'mm'	=>	'200',
		'mn'	=>	'200',
		'mp'	=>	'200',
		'mr'	=>	'200',
		'ms'	=>	'200',
		'mş'	=>	'200',
		'mt'	=>	'200',
		'mv'	=>	'200',
		'my'	=>	'200',
		'mz'	=>	'200',
		'nb'	=>	'200',
		'nc'	=>	'200',
		'nç'	=>	'200',
		'nd'	=>	'200',
		'nf'	=>	'200',
		'ng'	=>	'200',
		'nğ'	=>	'200',
		'nh'	=>	'200',
		'nj'	=>	'200',
		'nk'	=>	'200',
		'nl'	=>	'200',
		'nm'	=>	'200',
		'nn'	=>	'200',
		'np'	=>	'200',
		'nr'	=>	'200',
		'ns'	=>	'200',
		'nş'	=>	'200',
		'nt'	=>	'200',
		'nv'	=>	'200',
		'ny'	=>	'200',
		'nz'	=>	'200',
		'pb'	=>	'200',
		'pc'	=>	'200',
		'pç'	=>	'200',
		'pd'	=>	'200',
		'pf'	=>	'200',
		'pg'	=>	'200',
		'pğ'	=>	'200',
		'ph'	=>	'200',
		'pj'	=>	'200',
		'pk'	=>	'200',
		'pl'	=>	'200',
		'pm'	=>	'200',
		'pn'	=>	'200',
		'pp'	=>	'200',
		'pr'	=>	'200',
		'ps'	=>	'200',
		'pş'	=>	'200',
		'pt'	=>	'200',
		'pv'	=>	'200',
		'py'	=>	'200',
		'pz'	=>	'200',
		'rb'	=>	'200',
		'rc'	=>	'200',
		'rç'	=>	'200',
		'rd'	=>	'200',
		'rf'	=>	'200',
		'rg'	=>	'200',
		'rğ'	=>	'200',
		'rh'	=>	'200',
		'rj'	=>	'200',
		'rk'	=>	'200',
		'rl'	=>	'200',
		'rm'	=>	'200',
		'rn'	=>	'200',
		'rp'	=>	'200',
		'rr'	=>	'200',
		'rs'	=>	'200',
		'rş'	=>	'200',
		'rt'	=>	'200',
		'rv'	=>	'200',
		'ry'	=>	'200',
		'rz'	=>	'200',
		'sb'	=>	'200',
		'sc'	=>	'200',
		'sç'	=>	'200',
		'sd'	=>	'200',
		'sf'	=>	'200',
		'sg'	=>	'200',
		'sğ'	=>	'200',
		'sh'	=>	'200',
		'sj'	=>	'200',
		'sk'	=>	'200',
		'sl'	=>	'200',
		'sm'	=>	'200',
		'sn'	=>	'200',
		'sp'	=>	'200',
		'sr'	=>	'200',
		'ss'	=>	'200',
		'sş'	=>	'200',
		'st'	=>	'200',
		'sv'	=>	'200',
		'sy'	=>	'200',
		'sz'	=>	'200',
		'şb'	=>	'200',
		'şc'	=>	'200',
		'şç'	=>	'200',
		'şd'	=>	'200',
		'şf'	=>	'200',
		'şg'	=>	'200',
		'şğ'	=>	'200',
		'şh'	=>	'200',
		'şj'	=>	'200',
		'şk'	=>	'200',
		'şl'	=>	'200',
		'şm'	=>	'200',
		'şn'	=>	'200',
		'şp'	=>	'200',
		'şr'	=>	'200',
		'şs'	=>	'200',
		'şş'	=>	'200',
		'şt'	=>	'200',
		'şv'	=>	'200',
		'şy'	=>	'200',
		'şz'	=>	'200',
		'tb'	=>	'200',
		'tc'	=>	'200',
		'tç'	=>	'200',
		'td'	=>	'200',
		'tf'	=>	'200',
		'tg'	=>	'200',
		'tğ'	=>	'200',
		'th'	=>	'200',
		'tj'	=>	'200',
		'tk'	=>	'200',
		'tl'	=>	'200',
		'tm'	=>	'200',
		'tn'	=>	'200',
		'tp'	=>	'200',
		'tr'	=>	'200',
		'ts'	=>	'200',
		'tş'	=>	'200',
		'tt'	=>	'200',
		'tv'	=>	'200',
		'ty'	=>	'200',
		'tz'	=>	'200',
		'vb'	=>	'200',
		'vc'	=>	'200',
		'vç'	=>	'200',
		'vd'	=>	'200',
		'vf'	=>	'200',
		'vg'	=>	'200',
		'vğ'	=>	'200',
		'vh'	=>	'200',
		'vj'	=>	'200',
		'vk'	=>	'200',
		'vl'	=>	'200',
		'vm'	=>	'200',
		'vn'	=>	'200',
		'vp'	=>	'200',
		'vr'	=>	'200',
		'vs'	=>	'200',
		'vş'	=>	'200',
		'vt'	=>	'200',
		'vv'	=>	'200',
		'vy'	=>	'200',
		'vz'	=>	'200',
		'yb'	=>	'200',
		'yc'	=>	'200',
		'yç'	=>	'200',
		'yd'	=>	'200',
		'yf'	=>	'200',
		'yg'	=>	'200',
		'yğ'	=>	'200',
		'yh'	=>	'200',
		'yj'	=>	'200',
		'yk'	=>	'200',
		'yl'	=>	'200',
		'ym'	=>	'200',
		'yn'	=>	'200',
		'yp'	=>	'200',
		'yr'	=>	'200',
		'ys'	=>	'200',
		'yş'	=>	'200',
		'yt'	=>	'200',
		'yv'	=>	'200',
		'yy'	=>	'200',
		'yz'	=>	'200',
		'zb'	=>	'200',
		'zc'	=>	'200',
		'zç'	=>	'200',
		'zd'	=>	'200',
		'zf'	=>	'200',
		'zg'	=>	'200',
		'zğ'	=>	'200',
		'zh'	=>	'200',
		'zj'	=>	'200',
		'zk'	=>	'200',
		'zl'	=>	'200',
		'zm'	=>	'200',
		'zn'	=>	'200',
		'zp'	=>	'200',
		'zr'	=>	'200',
		'zs'	=>	'200',
		'zş'	=>	'200',
		'zt'	=>	'200',
		'zv'	=>	'200',
		'zy'	=>	'200',
		'zz'	=>	'200',
		'aa'	=>	'032',
		'aâ'	=>	'032',
		'ae'	=>	'032',
		'aı'	=>	'032',
		'ai'	=>	'032',
		'aî'	=>	'032',
		'ao'	=>	'032',
		'aö'	=>	'032',
		'au'	=>	'032',
		'aü'	=>	'032',
		'aû'	=>	'032',
		'âa'	=>	'032',
		'ââ'	=>	'032',
		'âe'	=>	'032',
		'âı'	=>	'032',
		'âi'	=>	'032',
		'âî'	=>	'032',
		'âo'	=>	'032',
		'âö'	=>	'032',
		'âu'	=>	'032',
		'âü'	=>	'032',
		'âû'	=>	'032',
		'ea'	=>	'032',
		'eâ'	=>	'032',
		'ee'	=>	'032',
		'eı'	=>	'032',
		'ei'	=>	'032',
		'eî'	=>	'032',
		'eo'	=>	'032',
		'eö'	=>	'032',
		'eu'	=>	'032',
		'eü'	=>	'032',
		'eû'	=>	'032',
		'ıa'	=>	'032',
		'ıâ'	=>	'032',
		'ıe'	=>	'032',
		'ıı'	=>	'032',
		'ıi'	=>	'032',
		'ıî'	=>	'032',
		'ıo'	=>	'032',
		'ıö'	=>	'032',
		'ıu'	=>	'032',
		'ıü'	=>	'032',
		'ıû'	=>	'032',
		'ia'	=>	'032',
		'iâ'	=>	'032',
		'ie'	=>	'032',
		'iı'	=>	'032',
		'ii'	=>	'032',
		'iî'	=>	'032',
		'io'	=>	'032',
		'iö'	=>	'032',
		'iu'	=>	'032',
		'iü'	=>	'032',
		'iû'	=>	'032',
		'îa'	=>	'032',
		'îâ'	=>	'032',
		'îe'	=>	'032',
		'îı'	=>	'032',
		'îi'	=>	'032',
		'îî'	=>	'032',
		'îo'	=>	'032',
		'îö'	=>	'032',
		'îu'	=>	'032',
		'îü'	=>	'032',
		'îû'	=>	'032',
		'oa'	=>	'032',
		'oâ'	=>	'032',
		'oe'	=>	'032',
		'oı'	=>	'032',
		'oi'	=>	'032',
		'oî'	=>	'032',
		'oo'	=>	'032',
		'oö'	=>	'032',
		'ou'	=>	'032',
		'oü'	=>	'032',
		'oû'	=>	'032',
		'öa'	=>	'032',
		'öâ'	=>	'032',
		'öe'	=>	'032',
		'öı'	=>	'032',
		'öi'	=>	'032',
		'öî'	=>	'032',
		'öo'	=>	'032',
		'öö'	=>	'032',
		'öu'	=>	'032',
		'öü'	=>	'032',
		'öû'	=>	'032',
		'ua'	=>	'032',
		'uâ'	=>	'032',
		'ue'	=>	'032',
		'uı'	=>	'032',
		'ui'	=>	'032',
		'uî'	=>	'032',
		'uo'	=>	'032',
		'uö'	=>	'032',
		'uu'	=>	'032',
		'uü'	=>	'032',
		'uû'	=>	'032',
		'üa'	=>	'032',
		'üâ'	=>	'032',
		'üe'	=>	'032',
		'üı'	=>	'032',
		'üi'	=>	'032',
		'üî'	=>	'032',
		'üo'	=>	'032',
		'üö'	=>	'032',
		'üu'	=>	'032',
		'üü'	=>	'032',
		'üû'	=>	'032',
		'ûa'	=>	'032',
		'ûâ'	=>	'032',
		'ûe'	=>	'032',
		'ûı'	=>	'032',
		'ûi'	=>	'032',
		'ûî'	=>	'032',
		'ûo'	=>	'032',
		'ûö'	=>	'032',
		'ûu'	=>	'032',
		'ûü'	=>	'032',
		'ûû'	=>	'032',
		'turk'	=>	'00440',
		'mtrak'	=>	'014000',
	),
);

