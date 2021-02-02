<template>
    <app-layout>
  <!--      <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>-->

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                   <div class="flex flex-wrap">
                        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                            <!--Metric Card-->
                            <div class="bg-white border rounded shadow p-2">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded p-3 bg-green-600"><i class="fa fa-wallet fa-2x fa-fw fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text-gray-500">Wallets</h5>
                                        <h3 class="font-bold text-3xl">3 <span class="text-green-500"><i class="fas fa-caret-up"></i></span></h3>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                            <!--Metric Card-->
                            <div class="bg-white border rounded shadow p-2">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded p-3 bg-pink-600"><i class="fas fa-chart-line fa-2x fa-fw fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text-gray-500">Beneficio</h5>
                                        <h3 class="font-bold text-3xl">35234 <span class="text-pink-500">$</span></h3>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                            <!--Metric Card-->
                            <div class="bg-white border rounded shadow p-2">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded p-3 bg-yellow-600"><i class="fab fa-bitcoin fa-2x fa-fw fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text-gray-500">Monedas </h5>
                                        <h3 class="font-bold text-3xl">2 <span class="text-yellow-600">(BTC, ETH, USD)</span></h3>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                            <!--Metric Card-->
                            <div class="bg-white border rounded shadow p-2">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded p-3 bg-blue-600"><i class="fas fa-server fa-2x fa-fw fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text-gray-500">RIGS ACTIVOS</h5>
                                        <h3 class="font-bold text-3xl">2</h3>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                            <!--Metric Card-->
                            <div class="bg-white border rounded shadow p-2">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded p-3 bg-indigo-600"><i class="far fa-lightbulb fa-2x fa-fw fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text-gray-500">Energía</h5>
                                        <h3 class="font-bold text-3xl">1.2 kw/h</h3>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                            <!--Metric Card-->
                            <div class="bg-white border rounded shadow p-2">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded p-3 bg-red-600"><i class="fas fa-inbox fa-2x fa-fw fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text-gray-500">Alertas</h5>
                                        <h3 class="font-bold text-3xl">3 <span class="text-red-500"><i class="fas fa-caret-up"></i></span></h3>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                    </div>
                    <!--Divider-->
                    <hr class="border-b-2 border-gray-400 my-8 mx-4">

                <div class="flex flex-row flex-wrap flex-grow mt-2">

                <div class="w-full md:w-1/2 p-3">
                    <!--Graph Card-->
                    <div class="bg-white border rounded shadow">
                        <div class="border-b p-3">
                            <h5 class="font-bold uppercase text-gray-600">Beneficio Mensual</h5>
                        </div>
                        <div class="p-5">
                            <template>
                            <BarChart/>
                            </template>
                          
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>

                <div class="w-full md:w-1/2 p-3">
                    <!--Graph Card-->
                    <div class="bg-white border rounded shadow">
                        <div class="border-b p-3">
                            <h5 class="font-bold uppercase text-gray-600">Precio BTC</h5>
                        </div>
                        <div class="p-5">
                                      <template>
                            <LineChart/>
                            </template>
                           
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>

                <div class="w-full md:w-1/2 p-3">
                    <!--Graph Card-->
                    <div class="bg-white border rounded shadow">
                        <div class="border-b p-3">
                            <h5 class="font-bold uppercase text-gray-600">Tiempo Minado</h5>
                        </div>
                        <div class="p-5">
                            <template>
                            <PieChart/>
                            </template>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>

                <div class="w-full md:w-1/2 p-3">
                    <!--Graph Card-->
                    <div class="bg-white border rounded shadow">
                        <div class="border-b p-3">
                            <h5 class="font-bold uppercase text-gray-600">Evol. Dificultad</h5>
                        </div>
                        <div class="p-5">
                             <template>
                                   <AreaChart/>
                               </template>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>

                

                <div class="w-full p-3">
                    <!--Table Card-->
                    <div class="bg-white border rounded shadow">
                        <div class="border-b p-3">
                            <h5 class="font-bold uppercase text-gray-600">Registro Diario</h5>
                        </div>
                        <div class="p-5">
                            <table class="w-full p-5 text-gray-700">
                                <thead>
                                    <tr>
                                        <th class="text-left text-blue-900">Día</th>
                                        <th class="text-left text-blue-900">Consumo Kw/día</th>
                                        <th class="text-left text-blue-900">Beneficio $/día</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>12/12/2020</td>
                                        <td>1.2</td>
                                        <td>10</td>
                                    </tr>
                                     <tr>
                                        <td>13/12/2020</td>
                                        <td>1.5</td>
                                        <td>11</td>
                                    </tr>
                                                                        <tr>
                                        <td>14/12/2020</td>
                                        <td>1.5</td>
                                        <td>11</td>
                                    </tr>
                                                                        <tr>
                                        <td>15/12/2020</td>
                                        <td>1.7</td>
                                        <td>12</td>
                                    </tr>
                                                                        <tr>
                                        <td>16/12/2020</td>
                                        <td>1.4</td>
                                        <td>10</td>
                                    </tr>
                                                                        <tr>
                                        <td>17/12/2020</td>
                                        <td>1.2</td>
                                        <td>10</td>
                                    </tr>                                       
                
                                </tbody>
                            </table>

                            <p class="py-2"><a href="#">Buscar datos de otros días...</a></p>

                        </div>
                    </div>
                    <!--/table Card-->
                </div>


            </div>

                    
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Welcome from '@/Jetstream/Welcome'
    import { Bar } from 'vue-chartjs'
    import AreaChart from "@/Components/Charts/AreaChart";
    import PieChart from "@/Components/Charts/PieChart";
    import BarChart from "@/Components/Charts/BarChart";
    import RadarChart from "@/Components/Charts/RadarChart";
    import LineChart from "@/Components/Charts/LineChart";
   
export default {
  name: "App",
  components: {
    AreaChart,
    PieChart,
    BarChart,
    RadarChart,
    LineChart,
    AppLayout,
    Welcome
  },
  data() {
    return {
      chartData: {
        Books: 24,
        Magazine: 30,
        Newspapers: 10
      }
    };
  }
};
</script>