<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Models\Alumno;
use App\Models\Examen;
use App\Models\Pregunta;
use App\Models\Opcion;
use App\Models\Test;
use App\Models\Cita;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function vista(){
        return view('prueba.intro');
    }
    public function index()
    {
        //
        $val = 1;
        $examen = Examen::where('id',$val)->first();
        $dato = Pregunta::select('*')->where('examen_id',$val)->get();
        /*dd($dato->all()); 
      $opcion = Opcion::select('*')->join('pregunta','opcion.pregunta_id','=','pregunta.id')->get();
       
          
      */
      return view('prueba.listar',compact('dato'));
    /*   */
           /* $array  = array();
            while ($array = json_decode($dato)) {
                $array = $array;
             
            dd($array);   
            }*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mostrar()
    {
        $var = Session::get('sesion','No existe session');
        $alumno = Alumno::select('id')->where('codigo',$var)->first();
        $historial = Test::select('*')->where('alumno_id',$alumno->id)->get();
        return view('historial.listar',compact('historial'));
        /*$historial = Test::select('*')->get();
        */
    }

     public function cita()
    {
        $var = Session::get('sesion','No existe session');
        $alumno = Alumno::select('id')->where('codigo',$var)->first();
        $test = Test::select('id')->where('alumno_id',$alumno->id)->first();
       
        $cita = Cita::select('*')->where('test_id',$alumno->id)->get();
        return view('cita.listar',compact('cita'));
        /*$historial = Test::select('*')->where('alumno_id',$alumno->id)->get();
        return view('historial.listar',compact('historial'));*/
        /*$historial = Test::select('*')->get();
        */
       dd($cita);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $dato = $request->opc;
        $a = array($dato);
        dd($a);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
     
        $fecha = now();
    
        $data = $request->all('opt');
        $array = array_map("array_sum",$data);
        $var = array_get($array,'opt');
        $codigo = $request->input('codigo');
        $alumno = Alumno::select('*')->where('codigo',$codigo)->first();
        $id = $alumno->id;
        $cadena = json_encode($data);
        $prueba = new Test();
        $normal =0;
        $nnormal =1;
       if( 20<=$var  && $var<36){
            $diagnostico = 'Sin Observacion';
           /* $lado = array('diagnostico ' => $diagnostico ,
                          'codigo' => $request->input('codigo'),
                          'examen' => $request->input('examen'),
                          'respuestas' => $data
                       );*/
            $prueba->examen_id = $request->input('examen');
            $prueba->alumno_id = $id;
            $prueba->diagnostico = $diagnostico;
            $prueba->puntuacion = $cadena;
            $prueba->test_estado = $normal;
            $prueba->fecexam = $fecha;
            $prueba->save();

            return redirect()->route('test_vista')->with('status','Ha rendido su test, revise el resultado en su historial.');

        }elseif (35< $var && $var<46) {
            $diagnostico ='Depresion leve';
           /* $lado = array('diagnostico ' => $diagnostico ,
                       'codigo' => $request->input('codigo'),
                       'examen' => $request->input('examen'),
                        'respuestas' =>$cadena
                       );*/
            
            $prueba->examen_id = $request->input('examen');
            $prueba->alumno_id = $id;
            $prueba->diagnostico = $diagnostico;
            $prueba->puntuacion = $cadena;
            $prueba->test_estado = $nnormal;
            $prueba->fecexam = $fecha;
            $prueba->save();

            return redirect()->route('test_vista')->with('status','Ha rendido su test, revise el resultado en su historial.');

        }elseif (46<=$var && $var<66) {
            $diagnostico = 'Depresion moderada';
           /* $lado = array('diagnostico ' => $diagnostico ,
                       'codigo' => $request->input('codigo'),
                       'examen' => $request->input('examen'),
                        'respuestas' =>$cadena
                       );*/
            
            $prueba->examen_id = $request->input('examen');
            $prueba->alumno_id = $id;
            $prueba->diagnostico = $diagnostico;
            $prueba->puntuacion = $cadena;
            $prueba->test_estado = $nnormal;
            $prueba->fecexam = $fecha;
            $prueba->save();

            return redirect()->route('test_vista')->with('status','Ha rendido su test, revise el resultado en su historial.');
        }elseif (66<=$var && $var<81 ) {
            $diagnostico ='Depresion severa';
            /*$lado = array('diagnostico ' => $diagnostico ,
                       'codigo' => $request->input('codigo'),
                       'examen' => $request->input('examen'),
                          'respuestas' =>$cadena
                       );
            */
            
            $prueba->examen_id = $request->input('examen');
            $prueba->alumno_id = $id;
            $prueba->diagnostico = $diagnostico;
            $prueba->puntuacion = $cadena;
            $prueba->fecexam = $fecha;
            $prueba->test_estado = $nnormal;
            $prueba->save();

            return redirect()->route('test_vista')->with('status','Ha rendido su test, revise el resultado en su historial.');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
