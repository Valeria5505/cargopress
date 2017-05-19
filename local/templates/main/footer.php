
		
		<!-- FOOTER -->
		<footer class="footer">
			
			<div class="footer-top">
				
				<div class="container">
					
					<div class="row">
						
						<div class="col-xs-12 col-md-4">
							
							<p>
								<img alt="logo-footer" src="/local/assets/images/logo-footer.png" class="logo">
							</p>
							<p>
                                <?$APPLICATION->IncludeFile(
                                    $APPLICATION->GetTemplatePath("/include/about.php"),
                                    Array(),
                                    Array("MODE"=>"html")
                                );?>
							</p>
							<p>
								<a target="_blank" href="#" class="icon-container icon-container--square">
									<span class="fa fa-facebook"></span>
								</a>
								<a target="_blank" href="#" class="icon-container icon-container--square">
									<span class="fa fa-twitter"></span>
								</a>
								<a target="_blank" href="#" class="icon-container icon-container--square">
									<span class="fa fa-wordpress"></span>
								</a>
								<a target="_blank" href="#" class="icon-container icon-container--square">
									<span class="fa fa-youtube-play"></span>
								</a>
							</p>
							
						</div><!-- /.row -->
						
						<div class="col-xs-12 col-md-2">
							
							<div class="widget_nav_menu">
								
								<h6 class="footer-top__headings">Услуги</h6>
                                <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"cargopress_bottom_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "cargopress_bottom_menu",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_THEME" => "site",
		"ROOT_MENU_TYPE" => "bottom",
		"USE_EXT" => "Y"
	),
	false
);?>
								
							</div><!-- /.widget_nav_menu -->
							
						</div><!-- /.row -->						
						
					</div><!-- /.row -->
					
				</div><!-- /.footer -->
				
			</div><!-- /.footer-top -->

            <div class="footer-bottom">

                <div class="container">

                    <div class="footer-bottom__right">
                        &copy; <?=getCopyrightYearRange(2016)?> CargoPress. Все права защищены
                    </div>

                </div><!-- /.container -->

            </div><!-- /.footer-bottom -->

        </footer>

        </div><!-- /.boxed-container -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Задать вопрос</h4>
                    </div>
                    <form>
                        <div class="modal-body">
                            <input required name="name" tabindex="1" type="text" placeholder="Имя" class="form-control input-md">
                            <input required name="email" tabindex="2" type="email" placeholder="E-mail" class="form-control input-md">
                            <input id="phone" name="phone" tabindex="3" type="text" placeholder="Телефон" class="form-control input-md">
                            <textarea required name="textarea" tabindex="4" class="form-control">Текст вопроса</textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-dismiss="modal">Закрыть</button>
                            <button type="button" class="btn btn-info" id="send">Отправить вопрос</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        </body>
        </html>