<?php /*
template name: Контакты
*/ ?>
<?php get_header(); ?>

	<div class="page-height">
		<div class="container about-us-container">
			<h1 class="title-block"><span><?php the_title(); ?></span></h1>
			<div class="about-us">
				<div class="row">
					<div class="col-xs-6">
						<?php the_content(); ?>
					</div>
					<div class="col-xs-6">
						<h3 class="form-title">Обратная связь</h3>
						<form id="form-id" class="form-class">
							<div class="form-group">
								<label>*Ваше имя:</label>
								<input class="form-control" name="name" type="text" required />
							</div>
							<div class="form-group">
								<label>Email:</label>
								<input class="form-control" name="mail" type="email" />
							</div>
							<div class="form-group">
								<label>Сообщение:</label>
								<textarea class="form-control" name="que" cols="30" rows="5"></textarea>
							</div>
							<div class="form-group for-robots" style="display: none;">
								<input class="form-control" type="text" name="email" />
								<input class="form-control modal-form-value" type="text" name="title" value="Страница Контакты" />
							</div>
							<button type="submit" class="btn btn-primary">Отправить</button>
						</form>
					</div>
					<div class="col-xs-12 map">
						<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=N_Cmz82o9666GiAenvx3p-b-tySbZTex&amp;width=100%&amp;height=450&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>