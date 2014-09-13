              <li class="CatgLv1"><a href="edit_catg.php?id=<?php echo $RowCatgLv1['id'];?>"><?php echo $RowCatgLv1['id']."&nbsp;.&nbsp;".$RowCatgLv1['CatgName'];?></a>
              	<ul>
                  <?php
                    $Lv1FatherId=$RowCatgLv1['id'];
                    $QureyCatgLv2=mysql_query("SELECT * FROM category WHERE CatgLv=2 and CatgFatherId=$Lv1FatherId ORDER BY id");
                    while($RowCatgLv2=mysql_fetch_array($QureyCatgLv2)){
                  ?>
                      <li class="CatgLv2"><a href="edit_catg.php?id=<?php echo $RowCatgLv2['id'];?>"><?php echo $RowCatgLv2['id']."&nbsp;.&nbsp;".$RowCatgLv2['CatgName'];?></a>
                        <ul>
                          <?php
                            $Lv2FatherId=$RowCatgLv2['id'];
                            $QureyCatgLv3=mysql_query("SELECT * FROM category WHERE CatgLv=3 and CatgFatherId=$Lv2FatherId ORDER BY id");
                            while ($RowCatgLv3=mysql_fetch_array($QureyCatgLv3)){
                          ?>
                          <li class="CatgLv3"><a href="edit_catg.php?id=<?php echo $RowCatgLv3['id'];?>"><?php echo $RowCatgLv3['id']."&nbsp;.&nbsp;".$RowCatgLv3['CatgName'];?></a></li>
                          <?php
                            }
                          ?>
                        </ul>
                      </li>
                  <?php
                    }
                  ?>
                </ul>
              </li>