<?php
/**
 * Cielo
 *
 * Cliente para o Web Service da Cielo.
 *
 * O Web Service permite efetuar vendas com cartões de bandeira
 * VISA e Mastercard, tanto no débito quanto em compras a vista ou parceladas.
 *
 * Licença
 * Este código fonte está sob a licença GPL-3.0+
 *
 * @category   Library
 * @package    MrPrompt\Cielo
 * @subpackage Cliente
 * @copyright  Thiago Paes <mrprompt@gmail.com> (c) 2013
 * @license    GPL-3.0+
 */

namespace MrPrompt\Cielo\Resposta;

use MrPrompt\Cielo\Requisicao\AutorizacaoPortador as Requisicao;

/**
 * Resposta da requisição de autorizacao de portador
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class AutorizacaoPortador extends Resposta
{
    /**
     * @var AutorizacaoPortador
     */
    private $requisicao;
    
    /**
     * 
     * @param Requisicao $requisicao
     */
    public function __construct(Requisicao $requisicao)
    {
        
    }
}
