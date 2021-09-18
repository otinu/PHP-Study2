<?php

require '4-9_include.php';

//requireとの違いは、取り込んだファイル内のメソッドが使っても使われなくても、その時点でエラーにならない

//include '4-9_include.php';



//どこかのrequireと重複しなかった場合に呼び出す。
//ライブラリなどで含まれていなかった場合など、保険として置いとくような使い方
require_once '4-9_include.php';

//include_once
?>