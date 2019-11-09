@extends('layouts.main')

@section('title', 'Home')

@section('main')
    <section class="seccionHome">
        <h2>Consigna</h2>
        <ol>
            <li>
                El municipio de San Andrés de Giles está organizando una carrera de 10Km, entre el
                campo y la ciudad, para fomentar el atletismo en la zona. Los contacta a ustedes para crear
                un sitio web en el cual los corredores puedan registrarse. El registro es gratuito. Los
                corredores deberán ingresar los siguientes datos:
                <ul>
                    <li>Nombre</li>
                    <li>Apellido</li>
                    <li>Fecha de nacimiento</li>
                    <li>Domicilio completo (Calle, número, ciudad, provincia, país)</li>
                    <li>DNI/Pasaporte</li>
                    <li>Nacionalidad</li>
                    <li>Email</li>
                    <li>Teléfono</li>
                    <li>Indicar cómo se enteró del evento</li>
                    <li>En qué equipo desea participar? (equipo rojo o equipo verde)</li>
                    <li>Comentarios/Sugerencias</li>
                </ul>
            </li>
            <li>
                El formulario debe contemplar los siguientes aspectos de seguridad:
                <ul>
                    <li>Debe accederse vía https.</li>
                    <li>Debe realizarse la adecuada validación de entrada de datos.</li>
                    <li>Evitar la posibilidad de realizar ataques de XSS y SQL Injection.</li>
                </ul>
            </li>
            <li>
                Los usuarios registrados deben almacenarse en una DB (compatible con SQL).
            </li>
            <li>
                Debe haber una página adicional a la del formulario en la cual se pueda ver el listado de
                los usuarios registrados, para que el municipio pueda conocer quiénes son los participantes.
            </li>
        </ol>
        <h2>Entregables</h2>
        <ol>
            <li>Link a código fuente en github.</li>
            <li>Presentar el formulario de registro en pantalla, mostrando: 
                <ul>
                    <li>Su funcionamiento desde el punto de vista de un usuario que intenta registrarse.</li>
                    <li>Mostrar página con el total de usuarios registrados.</li>
                    <li>Explicar, mostrando el código fuente, como realizaron la validación de datos y
                    evitaron la inyección de código (XSS y SQL Injection).</li>
                </ul>
            </li>
        </ol>
    </section>
@endsection
