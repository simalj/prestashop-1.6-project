<?php

if (!defined('_PS_VERSION_'))
	exit;

class StatsUsedCoupons extends Module
{
    public function __construct()
    {
        $this->name = 'statsusedcoupons';
        $this->tab = 'analytics_stats';
        $this->version = '1.0.0';
        $this->author = 'Jan Simal';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('Štatistika použitých kupónov v objednávkach');
        $this->description = $this->l('Štatistika bude vypisovať všetky objednávky, ktoré použili nejaký zľavový kupón.');
        $this->context->controller->addCSS('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', 'all');

    }

    public function install()
    {
        return parent::install();
    }

    public function getContent()
    {
        $sql = '
            SELECT o.id_order, d.id_cart_rule AS id_coupon, o.total_paid_tax_excl AS order_value, c.firstname, c.lastname, o.date_add AS order_date
            FROM '._DB_PREFIX_.'orders o
            INNER JOIN '._DB_PREFIX_.'order_cart_rule d ON o.id_order = d.id_order
            INNER JOIN '._DB_PREFIX_.'customer c ON o.id_customer = c.id_customer
            ORDER BY o.date_add DESC
        ';

        $results = Db::getInstance()->executeS($sql);

        $html = '<table border="1">
            <tr>
                <th>ID objednávky</th>
                <th>ID kupónu</th>
                <th>Hodnota objednávky bez DPH</th>
                <th>Meno zákazníka</th>
                <th>Priezvisko zákazníka</th>
                <th>Order Date</th>
            </tr>';

        foreach ($results as $row) {
            $html .= '<tr>
                <td>'.$row['id_order'].'</td>
                <td>'.$row['id_coupon'].'</td>
                <td>'.number_format($row['order_value'], 2, ',', '').'</td>
                <td>'.$row['firstname'].'</td>
                <td>'.$row['lastname'].'</td>
                <td>'.$row['order_date'].'</td>
            </tr>';
        }

        $html .= '</table>';

        return $html;
    }
}