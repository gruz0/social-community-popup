<div id="scp_welcome_screen" class="wrap">
	<h1>Social Community Popup v<?php echo $version; ?></h1>
	<div class="about-text">Благодарю за установку плагина! Надеюсь он вам понравится :-)</div>

	<ul class="tabs">
		<li class="current">Информация о плагине</li>
		<li>История изменений</li>
		<li>Лицензирование</li>
		<li>Об авторе</li>
	</ul>

	<div class="box visible">
		<h2 class="title">Информация о плагине</h2>
		<p>Рекомендую внимательно ознакомиться с имеющимися настройками.<br />
		Кроме этого просмотрите видеоуроки по настройке социальных сетей.<br />
		Ссылки на них вам должны были прийти на почту после покупки плагина.</p>

		<h3 class="title">Как начать использование</h3>
		<ol>
			<li>Активировать "Режим отладки" на главной <a href="<?php echo admin_url( 'admin.php?page=social_community_popup' ); ?>">странице настроек плагина</a></li>
			<li>Определиться с необходимыми социальными сетями</li>
			<li>Активировать и настроить каждую из них в соответствующих разделах</li>
			<li>Проверить корректность работы всех выбранных социальных сетей</li>
			<li>Отключить "Режим отладки"</li>
		</ol>

		<h3 class="title">Какие социальные сети поддерживаются</h3>
		<p>В данный момент в плагине реализована поддержка самых популярных социальных сетей:</p>
		<ul>
			<li>ВКонтакте</li>
			<li>Facebook</li>
			<li>Одноклассники</li>
			<li>Twitter</li>
			<li>Google+</li>
		</ul>

		<h3 class="title">Планы на ближайшее время</h3>
		<p>Хочу обозначить и для вас, и для себя планы, которые хочется реализовать в самое ближайшее время.</p>
		<ul>
			<li>Добавить виджет YouTube</li>
			<li>Добавить виджет Instagram</li>
			<li>Добавить 2 новых варианта размещения виджетов</li>
			<li>Добавить всплытие окна не только по центру, но и сбоку, для привлечения внимания</li>
		</ul>

		<hr />
		<p>Если есть вопросы по работе плагина — смело задавайте мне их на <a href="mailto:support@gruz0.ru?subject=Вопрос по SCP">support@gruz0.ru</a>!</p>
	</div>

	<div class="box">
		<h2 class="title">История изменений</h2>

		<h3>Версия 0.7.2 от 21.01.2016</h3>
		<ul>
			<li>Изменён "Режим отладки", теперь виджет показывается только администратору сайта.</li>
			<li>Добавлено событие "Показывать окно при попытке уйти со страницы".</li>
			<li>Добавлено событие "Показывать окно при прокрутке окна больше N процентов".</li>
			<li>Добавлено событие "Показывать окно при клике на указанный CSS-селектор".</li>
			<li>Сгруппированы поля для настройки событий по типу: когда показывать, кому показывать.</li>
			<li>Обновлена версия API Facebook до 2.5.</li>
			<li>Добавлена опция "Использовать маленький заголовок" в виджет Facebook.</li>
			<li>Добавлена опция "Адаптировать ширину виджета под ширину контейнера" в виджет Facebook.</li>
			<li>Добавлена опция "Показывать в виджете события из следующих табов" в виджет Facebook.</li>
			<li>Удалена опция "Показывать публикации со стены страницы" виджета Facebook.</li>
			<li>Исправлена очистка куков после закрытия окна в браузерах Opera и Mozilla Firefox.</li>
		</ul>

		<h3>Версия 0.7.0 от 20.10.2015</h3>
		<ul>
			<li>Добавлено экранирование всех значений выводимых на фронтенде.</li>
			<li>Исправлена ошибка JS при использовании пустых значений некоторых полей виджета ВКонтакте.</li>
			<li>Настройки появления виджета вынесены во вкладку "События".</li>
			<li>Удалена функция rand() при создании уникального некеширующего параметра в scp.php.</li>
		</ul>

		<h3>Версия 0.6.9 от 19.09.2015</h3>
		<ul>
			<li>Добавлена возможность загрузки фонового изображения для виджета.</li>
			<li>Добавлена возможность задать цвет и прозрачность фоновой заливки полупрозрачного контейнера.</li>
			<li>Добавлена возможность выбрать местоположение кнопки закрытия окна в заголовке виджета.</li>
			<li>Добавлена возможность задать задержку перед показом кнопки закрытия виджета в подвале виджета.</li>
			<li>Добавлена возможность отцентрировать заголовки табов социальных сетей.</li>
			<li>Удалён тег &lt;b&gt; в описании описания виджета из-за невалидного HTML.</li>
			<li>Удалены отступы у изображений в описании виджета. Были проблемы с некоторыми темами.</li>
			<li>Исправлены стили CSS для кнопок закрытия окна (в заголовке и подвале виджета).</li>
			<li>Восстановлена работоспособность кнопки "Добавить медиафайл" в записях и страницах.</li>
		</ul>

		<h3>Версия 0.6.8 от 02.08.2015</h3>
		<ul>
			<li>Добавлен виджет <a href="https://business.pinterest.com/ru/widget-builder#do_embed_user" target="_blank" rel="nofollow">Pinterest Profile</a>.</li>
		</ul>

		<h3>Версия 0.6.7 от 01.08.2015</h3>
		<ul>
			<li>Добавлена возможность задания заголовка окна с виджетами.</li>
			<li>Добавлена возможность сокрытия табов с заголовками виджетов, если активна только одна соц. сеть.</li>
			<li>Поле описания виджетов изменено на текстовый редактор WordPress. Разрешены HTML-теги в нём.</li>
			<li>Добавлена кнопка "Спасибо, я уже с вами" с тремя вариантами оформления.</li>
			<li>Исправлена некорректная работа виджета Google+ в Mozilla Firefox.</li>
		</ul>

		<h3>Версия 0.6.6 от 20.06.2015</h3>
		<ul>
			<li>Исправлена некорректная работа виджета Facebook Page Plugin.</li>
			<li>Добавлена опция закрытия окна плагина нажатием на кнопку ESC.</li>
			<li>Кнопка "Закрыть" заменена на HTML-сущность и перемещена в один ряд с закладками социальных сетей.</li>
			<li>Обновлён внешний вид главного окна плагина, удалены нежелательные отступы.</li>
		</ul>

		<h3>Версия 0.6.5 от 11.05.2015</h3>
		<ul>
			<li>Добавлена поддержка виджетом Google+ персональных профилей. Раньше работали только страницы.</li>
		</ul>

		<h3>Версия 0.6.4 от 06.05.2015</h3>
		<ul>
			<li>Исправлена проблема с отображением виджета сообществ ВКонтакте в Mozilla Firefox. Во всех остальных браузерах проблем не было.<br />
				Проблема была связана с особенностями скрипта виджета ВКонтакте.<br />
				Он попросту не хотел отрисовываться в табе, если таб был не первым по счёту и размещался в скрытом контейнере.</li>
			<li>Обновлены настройки виджета Facebook в связи с изменением API до версии 2.3</li>
			<li>Виджет Like Box <a href="https://developers.facebook.com/docs/plugins/like-box-for-pages" target="_blank" rel="nofollow">помечен как deprecated</a>, вместо него теперь используется <a href="https://developers.facebook.com/docs/plugins/page-plugin" target="_blank" rel="nofollow">Page Plugin</a></li>
		</ul>

		<h3>Версия 0.6.2 от 09.02.2015</h3>
		<ul>
			<li>Добавлена опция отображения плагина на мобильных устройствах (экспериментальная!)</li>
			<li>Добавлена задержка 500 мс. для виджета ВКонтакте, некорректно работал в Mozilla Firefox</li>
			<li>Добавлена опция закрытия окна при клике на любую область экрана по просьбе клиента</li>
			<li>Исправлена работа плагина с кеширующими плагинами (благодарю за багрепорт)</li>
			<li>Исправлено отображение полос прокрутки в виджете Twitter Timeline (благодарю за багрепорт)</li>
			<li>Теперь код плагина не интегрируется в HTML, а загружается через Javascript</li>
		</ul>

		<h3>Версия 0.6.1 от 05.02.2015</h3>
		<ul>
			<li>Исправлена работа виджета Одноклассников, некорректно отображался</li>
			<li>Добавлена опция скругления углов главного окна плагина по просьбе клиента</li>
		</ul>

		<h3>Версия 0.6 от 19.01.2015</h3>
		<ul>
			<li>Добавлен виджет Twitter Timeline</li>
			<li>Добавлены расширенные настройки виджета Google+</li>
			<li>Добавлен "Режим отладки", позволяющий администратору удобно отладить нужные ему настройки</li>
			<li>Исправлены мелкие ошибки в работе плагина</li>
			<li>Отказался от группы во ВКонтакте, поддержка только по электронной почте</li>
		</ul>

		<h3>Версия 0.5 от 15.09.2014</h3>
		<ul>
			<li>Добавлен виджет Google+ Community</li>
			<li>Исправлены ошибки, не позволяющие корректно обновиться до последней версии</li>
			<li>При первой установке плагина добавил первичные настройки, чтобы легче было по примеру настраивать</li>
		</ul>

		<h3>Версия 0.3 от 23.03.2014</h3>
		<ul>
			<li>Добавлена настройка порядка отображения виджетов (сортировка закладок)</li>
			<li>Исправлен ряд мелких ошибок, проведена чистка кода</li>
		</ul>

		<h3>Версия 0.2 от 06.02.2014</h3>
		<ul>
			<li>Добавлен виджет Одноклассников</li>
			<li>Для каждой социальной сети настройки вынесены в отдельные страницы</li>
			<li>Добавлена мультиязычность плагина, все настройки переведены на русский язык</li>
			<li>Добавлена возможность полного удаления настроек плагина при его деинсталляции</li>
		</ul>

		<h3>Версия 0.1 от 01.02.2014</h3>
		<ul>
			<li>Первая версия плагина</li>
			<li>Добавлены виджеты Facebook и ВКонтакте</li>
		</ul>
	</div>

	<div class="box">
		<h2 class="title">Лицензирование</h2>

		<h3 class="title">Благодарность к пользователям, купившим плагин</h3>
		<p>Дорогой друг, именно благодаря вашему вниманию к моему плагину я хочу и дальше развивать его.<br />
		От всей души благодарю за интерес и, надеюсь, вы будете удовлетворены его работой.</p>

		<h3 class="title">Обращение к пиратам</h3>
		<p>Я понимаю, что в России не принято покупать и, чаще всего, воруют или скачивают где-нибудь бесплатно.<br />
		Если же после использования пиратской версии вы всё же не надумали купить его, позвольте объясню преимущества платной версии:</p>
		<ol>
			<li>Свободный доступ ко всем обновлениям и исправлениям плагина</li>
			<li>Возможность задать напрямую мне вопрос по настройкам плагина или сообщить об ошибке в работе</li>
			<li>Возможность заказать частную доработку (как бесплатно, так и за символическую стоимость) под вас</li>
			<li>Возможность участия в партнёрской программе и получать процент прибыли с продажи плагина</li>
		</ol>
		<p><a href="http://gruz0.ru/zadat-vopros/" target="_blank">Свяжитесь со мной</a> и я сообщу вам, где и как вы можете обновить вашу пиратскую версию до лицензионной.</p>
	</div>

	<div class="box">
		<h2 class="title">Об авторе</h2>
		<p>Если вы купили плагин, как и все порядочные клиенты, то, вероятно, уже знаете обо мне и кто я такой. :-)<br />
		Я — Александр Грузов, автор блога о WordPress и фрилансе: <a href="http://gruz0.ru/" target="_blank">http://gruz0.ru/</a>.</p>

		<p><b>Найти меня вы можете в социальных сетях или по почте:</b></p>
		<ul>
			<li><a href="https://www.facebook.com/gruz0">Facebook</a></li>
			<li><a href="https://twitter.com/gruz0">Twitter</a></li>
			<li><a href="mailto:support@gruz0.ru">support@gruz0.ru</a></li>
		</ul>
		<p>Прошу не удивляться, если вдруг я попрошу вас назвать номер выставленного вам счёта для оплаты.<br />
		Не хочу кормить пиратов, поэтому буду всячески вставлять палки в колёса подобным пользователям. ;-)</p>
		<img src="http://gruz0.ru/wp-content/uploads/2014/01/gruz0-300x300.png" alt="Александр Грузов" title="Александр Грузов" width="300" height="300" />
	</div>

</div>
