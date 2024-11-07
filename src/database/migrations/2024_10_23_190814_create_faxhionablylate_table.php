<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaxhionablylateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faxhionablylate', function (Blueprint $table) {
            $table->id();

            /**苗字 */
            $table->string('first_name');

            /**名前 */
            $table->string('last_name');

            /**性別 */
            $table->string('gender');

            /**メールアドレス */
            $table->string('email');

            /**パスワード */
            $table->integer('password');

            /**電話番号 */
            $table->integer('telephone_number');

            /**住所 */
            $table->string('address');

            /**建物名 */
            $table->string('Building_Name');

            /**お問い合わせの種類 */
            $table->string('inquiry_type');

            /**お問い合わせ内容 */
            $table->string('inquiry_content');

            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faxhionablylate');
    }
}
