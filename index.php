<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />

    <title>Hello, world!</title>
</head>

<body>

    <div class="container">

        <div class="content-wrap shadow p-3 mb-5 bg-body rounded">
            <div class="border">
                <h1 class="text-primary">Маркетинговому агентству Trendline требуются:</h1>
                <ul>
                    <li>Веб-дизайнер</li>
                    <li>Веб программист</li>
                    <li>Контекстолог</li>
                    <li>Таргетолог</li>
                    <li>Копирайтер</li>
                    <li>SEO-специалист</li>
                    <li>Дижитал маркетолог</li>
                    <li>Веб-аналитик</li>
                    <li>Специалист по видеомонтажу</li>
                    <li>Контент-менеджер</li>
                </ul>
            </div>

            <div class="border">
                <h2 class="text-primary">Преимущества работы у нас:</h2>
                <ol>
                    <li>Доходы сотрудников растут пропорционально росту дохода компании</li>
                    <li>Абсолютная прозрачность деятельности компании для сотрудников</li>
                    <li>Дружелюбная, непринужденная, молодежная атмосфера</li>
                    <li>Постоянное улучшение условий труда для мотивации сотрудников</li>
                    <li>Повышает квалификацию сотрудников за счет собственных средств</li>
                    <li>Возможность удаленной работы</li>
                </ol>
            </div>

            <div class="border">
                <h3 class="text-primary">Кого мы хотим видеть?</h3>
                <ul>
                    <li>Порядочных</li>
                    <li>Любящих то, чем они занимаются</li>
                    <li>Ответственных</li>
                    <li>Внутренне мотивированных и воодушевленных</li>
                    <li>Энергичных</li>
                    <li>Позитивных</li>
                    <li>Дружелюбных</li>
                </ul>
                <p>Самые главные качества - это порядочность, знание и любовь к делу, энергичность и позитив.</p>
                <p><u>По статистике те или иные качества сотрудников выявляются в течении 3-х недель. Поэтому, если вы не отвечаете этим минимальным требованиям, то не рекомендуется подавать заявку.</u></p>
            </div>

            <div class="border">
                <h3 class="text-primary">Если вы готовы то заполните ниже форму</h3>
                <h4>*рекомендуется отвечать максиально объективно и честно</h4>
                </p>


                <form action="transit-page.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Имя">
                        <label for="name">Имя</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="email" placeholder="E-mail">
                        <label for="email">E-mail</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="contact" class="form-control" id="contact" placeholder="WhatsApp или Telegram">
                        <label for="contact">WhatsApp или Telegram</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="city" class="form-control" id="city" placeholder="С какого ты города">
                        <label for="city">С какого ты города?</label>
                    </div>

                    <select class="form-select" name="spec" aria-label="Default select example">
                        <option selected>Выбери специализацию</option>
                        <option value="Веб-дизайнер">Веб-дизайнер</option>
                        <option value="Веб программист">Веб программист</option>
                        <option value="Контекстолог">Контекстолог</option>
                        <option value="Таргетолог">Таргетолог</option>
                        <option value="Копирайтер">Копирайтер</option>
                        <option value="SEO-специалист">SEO-специалист</option>
                        <option value="Digital маркетолог">Digital маркетолог</option>
                        <option value="Веб-аналитик">Веб-аналитик</option>
                        <option value="Специалист по видеомонтажу">Специалист по видеомонтажу</option>
                        <option value="Контент-менеджер">Контент-менеджер</option>
                    </select>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="like" id="like" placeholder="Насколько тебе нравиться то, чем вы занимеетесь (оцени от 0 до 10)">
                        <label for="like">Насколько тебе нравиться то, чем ты занимеетесь? (оцени от 0 до 10)</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="degree" id="degree" placeholder="Насколько ты в этом профессионал (оцени от 0 до 10)">
                        <label for="degree">Насколько ты в этом профессионал (оцени от 0 до 10)</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="experience" id="experience" placeholder="Сколько лет опыта?">
                        <label for="experience">Сколько лет опыта?</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="boss" id="boss" placeholder="У тебя есть нввыки руководителя (есть или нет)">
                        <label for="boss">У тебя есть нввыки или желание быть руководителем? (есть или нет)</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="businessman" id="businessman" placeholder="У тебя есть нввыки руководителя (есть или нет)">
                        <label for="businessman">Если ли у тебя предпринимательская жилка? (есть или нет)</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="important" id="important" placeholder="Что важно для тебя при устройстве на наемную работу?">
                        <label for="important">Что важно для тебя при устройстве на наемную работу?</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>


            <br>

            <div class="contact"><p>Контактный телефон: WhatsApp +7 706 426 21 71</p></div>

        </div>

    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="style.js"></script>
</body>

</html>