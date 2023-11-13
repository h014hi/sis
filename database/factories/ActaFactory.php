<?php

namespace Database\Factories;

use App\Models\Operativo;
use App\Models\Empresa;
use App\Models\Inspector;
use App\Models\Conductor;
use App\Models\Vehiculo;
use App\Models\Pago;
use App\Models\Infraccion;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Acta>
 */
class ActaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

	    $operativo = Operativo::all()->random();
        $empresa = Empresa::all()->random();
        $inspector = Inspector::all()->random();
        $condcutor = Conductor::all()->random();
        $vehiculo = Vehiculo::all()->random();
        $infraccion = Infraccion::all()->random();
        $pago = Pago::all()->random();
  

        return [
            //
		'estado'=> $this->faker->randomElement(["ARCHIVADO","CONDESCARGO","TRAMITADO", "NO"]),
        'numero'=> $this->faker->unique()->randomNumber(7),
        'ruta' =>$this->faker->randomElement(["AYAVIRI-AZANGARO","JULIACA-PUNO","ILAVE-AZANGARO", "PUNO-HUANCANE"]),
		'retencion' => $this->faker->text(),
        //'monto'=>$this->faker->randomElement([250.15,0,555.50]),
		'operativo_id' => $operativo->id,
        'empresa_id' =>$empresa->id,
        'inspector_id'=>$inspector->id,
        'conductor_id'=>$condcutor->id,
        'vehiculo_id'=>$vehiculo->id,
        'categoria'=> $this->faker->randomElement(["AIIIa","AIIb","AI"]),
        'estadolicencia'=> $this->faker->sentence(),
        'infraccion_id'=>$infraccion->id,
        //'pago_id'=>$pago->id,
        'observacion'=>$this->faker->text(),
        ];
    }
}
