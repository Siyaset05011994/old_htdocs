<?php

include "a/test.php"; // problem bu sehifeye b icindeki eyni adli classi cagiranda yaranir , php ayird ede bilmir hansini istifade etsin .
include "b/test.php"; // xeta verecek , buna gore de cagirdigimiz classlara namespace verib , cagirdigimiz yerde qarwisina namespace'sindeki yolu yazib cagirmaliyiq

new \A\c\d\test();
