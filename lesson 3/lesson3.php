<?php
//Постараюсь максимально вынести в файл код для удобства рассмотрения дз, но к сожалению не во всех случаях смогу поэтому буду вставлять ссылки
// ссылка на мр https://github.com/gustav2775/architecture-patterns-algorithms/pull/3/commits/ce4a0a5250d9e8d3a780d0ff3c9172e2e20a6461

//1. следовало бы вынести  формирование строки запроса к базе в отдельный класс 
public function updateFeed($model)
    {
        $tableName = $this->getTableName();
        $params[':idfeed'] = $model->idfeed;

        foreach ($model->prop as $key => $value) {
            if ($value) {
                if ($key != 'id') {
                    $columns[] = $key . "  = :" . $key;
                    $params[":$key"] =  $model->$key;
                }
            }
        }
        $columns = implode(',', $columns);
        $sql = "UPDATE `$tableName` SET $columns WHERE `idfeed`=:idfeed";
        
        App::call()->db->execute($sql, $params);
        return $model;
    }


//2. Не корректное название  getProduct следовало назвать  getOrder
class OrdersRepository extends Repository
{
  public  function getTableName()
  {
    return 'orders';
  }
  
  public function getProduct($order)
  {
    return  json_decode($order->products, true);
  }
}


//3. файлы Model и ModelDB абстрактные классы и их следовало вынести в отдельную дирректорию https://github.com/gustav2775/PHP2-HW5/tree/main/model

//4. Во вьюхе не должен содержаться код, следует вынести его в отдельный файл. https://github.com/gustav2775/PHP2-HW4/blob/main/views/menu.php
$menu = [
    [
        'href' => '/',
        'name' => 'Главная',
    ],
    [
        'href' => '/?c=gallery',
        'name' => 'Галерея',
    ],
    [
        'href' => '/?c=catalog',
        'name' => 'Каталог',
    ],
    [
        'href' => '/?c=feedback',
        'name' => 'Отзывы',
    ],
    [
        'href' => '/?c=basket',
        'name' => 'Корзина count ',
    ]
];

$menu[5]['name'] = str_replace("count", $quantity, $menu[5]['name']);

function renderMenu($menu)
{
    $html = '<ul>';
    foreach ($menu as $item) {
        $html .= '<li>';
        extract($item);
        $html .= '<a href="' . $item['href'] . '">' . $item['name'] . '</a>';
        if (isset($item['submenu'])) {
            $html .=  renderMenu($item['submenu']);
        }
        $html .= '</li>';
    }
    return $html .= '</ul>';
}


<div class="container">
    <nav>
        
        <?= renderMenu($menu) ?>
    </nav>
</div>

//2. Для решения втрого задания использовал код из репозитория https://github.com/gustav2775/PHP2-HW8

//2.1 Затычка на ввод. В коде использовал использовал строгое приведения к типу только при получение данных от пользователя.
// но не проводил проверку типа данных возвращаемые методами и почти ни где не писал спецификацию.

//2.2 Изобретение колеса (Reinventing the wheel) В текущем проете в качестве обучения, запросы для работы с бд писал сам,
//  но следодует использовать готовое решение PHP-SQL-Parser . 

//2.3 Спагетти-код (Spaghetti Code). С момента написания когда прошло 7 месяцев, уже забыл и не смог найти где происходит подключение к бд.
// Следует сделать подключение к бд более явным в классе App.