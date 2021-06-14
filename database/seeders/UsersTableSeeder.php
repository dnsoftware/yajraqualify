<?

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 500; ++$i) {
            $user = new User();
            $user->name = $faker->name;
            $user->first_name = $faker->firstNameMale;
            $user->last_name = $faker->lastName;
            $user->email = $faker->unique()->email;
            $user->password = Hash::make('secret');
            $user->save();
        }
    }
}
