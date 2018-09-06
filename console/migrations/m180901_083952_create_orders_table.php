<?php

use yii\db\Migration;

/**
 * Handles the creation of table `orders`.
 */
class m180901_083952_create_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('orders', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull()->unique(),
            'content' => $this->string(32)->notNull(),
            // 'order_code' => integer(11),
                // 'user_id' => integer(11),
                // 'secret_key' => $this->string(10),
                // 'delivery_id' => $this->integer(11),
                // 'payment_id' => $this->integer(11),
                // 'area_id' => $this->integer(11),
                // 'zone_id' => $this->integer(11),
                // 'lat' => $this->string(100),
                // 'lon' => $this->string(100),
                // 'client_chat_id' => $this->string(100),
                // 'telegram_id' => $this->string(100),
                // 'date' => $this->date,
                // 'time' => $this->time(),
                // 'delivery_price' => $this->float(10,2),
                // 'total_price' => $this->float(10,2),
                // 'price_without_discount' => $this->float(10,2),
                // 'status_id' => $this->integer(11),
                // 'deferred' => $this->integer(4),
                // 'paid' => $this->integer(1),
                // 'paid_by_client' => $this->integer(1),
                // 'sms_client_status' => $this->integer(1),
                // 'user_name' => $this->string(100),
                // 'user_email' => $this->string(100),
                // 'user_address' => $this->string(255),
                // 'user_address2' => $this->string(255),
                // 'user_home' => $this->string(50),
                // 'user_unit' => $this->integer(10),
                // 'user_floor' => $this->integer(10),
                // 'user_apartment' => $this->integer(10),
                // 'delivery_in' => $this->integer(5),
                // 'user_phone' => $this->string(30),
                // 'user_phone2' => $this->string(30),
                // 'user_comment' => $this->string(500),
                // 'ip_address' => $this->string(50),
                // 'created' => $this->dateTime(),
                // 'closed_date' => $this->dateTime(),
                // 'updated' => $this->dateTime(),
                // 'started' => $this->dateTime(),
                // 'discount' => $this->string(255),
                // 'admin_comment' => $this->text(),
                // 'status_history' => $this->text(),
                // 'manufacturer_id' => $this->integer(10),
                // 'restoran_informed' => $this->integer(4),
                // 'restoran_confirm' => $this->integer(4),
                // 'restoran_cancel' => $this->integer(4),
                // 'restoran_cancel_text' => $this->text(),
                // 'restoran_informed_time' => $this->time,
                // 'operator_id' => $this->integer(11),
                // 'courier_id' => $this->integer(11),
                // 'courier_type' => $this->integer(2),
                // 'courier_time' => $this->time,
                // 'courier_comming_time' => $this->integer(11),
                // 'courier_info' => $this->integer(4),
                // 'courier_re_info' => $this->integer(11),
                // 'courier_status' => $this->string(50),
                // 'courier_comment' => $this->text(),
                // 'client_info' => $this->integer(4),
                // 'delivery_time' => $this->integer(11),
                // 'manager_create_notify' => $this->integer(4),
                // 'manager_deny_notify' => $this->integer(4),
                // 'order_from' => $this->integer(4),
                // 'who_paid' => $this->integer(4),
                // 'incident_restaurant' => $this->integer(4),
                // 'incident_operator' => $this->integer(4),
                // 'incident_courier' => $this->integer(4),
                // 'incident_client' => $this->integer(1),
                // 'incident_dispatcher' => $this->integer(1),
                // 'incident_text' => $this->text(),
        ]);

        $this->createIndex(
            'idx-orders-user_id',
            'orders',
            'user_id'
        );

        $this->addForeignKey(
            'fk-orders-user_id',
            'orders',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );


        // $this->insert('orders', [
        //     'title' => 'test 1',
        //     'content' => 'content 1',
        // ]);

        // $this->insert('orders', [
        //     'title' => 'test 2',
        //     'content' => 'content 2',
        // ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // $this->dropForeignKey(
        //     'fk-orders-user_id',
        //     'orders'
        // );

        // $this->dropIndex(
        //     'idx-orders-user_id',
        //     'orders',
        // );

        // $this->delete('orders', ['id' => 1]);
        $this->dropTable('orders');
    }
}
