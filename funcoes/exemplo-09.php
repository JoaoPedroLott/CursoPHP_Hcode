<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //Inicio: Diretor Comercial
            array(
                'nome_cargo' => 'Diretor comercial',
                'subordinados' => array(
                    //Inicio: Gerende de vendas
                    array(
                        'nome_cargo' => 'Gerente de vendas',
                        'subordinados' => array(
                            //Inicio: Vendedor
                            array(
                                'nome_cargo' => 'Vendedor'
                            )
                            //Fim: Vendedor
                        )
                        //Fim: Gerende de Vendas
                    )
                    //Fim: Diretor Comercial
                )
            ),
            //Inicio: Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor financeiro',
                'subordinados' => array(
                    //Inicio: Gerende de contas
                    array(
                        'nome_cargo' => 'Gerente de contas',
                        'subordinados' => array(
                            //Inicio: Supervisor
                            array(
                                'nome_cargo' => 'Supervisor'
                            )
                        )
                    )
                )
            )
        ) 
    )
);

function exibe($cargos){

    $html = '<ul>';

    foreach ($cargos as $cargo) {
        
        $html .= "<li>";
        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
            $html .= exibe($cargo['subordinados']);
        }

        $html .= "</li>";
    }

    $html .= '</ul>';

    return $html;
}

echo exibe($hierarquia);

?>