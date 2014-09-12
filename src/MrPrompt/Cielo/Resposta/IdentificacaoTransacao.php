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

use MrPrompt\Cielo\Requisicao\IdentificacaoTransacao as Requisicao;
use MrPrompt\Cielo\Resposta\Resposta;
use SimpleXMLElement;

/**
 * Requisição de autorizacao de portador
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class IdentificacaoTransacao extends Resposta
{
    /**
     * @ var Requisicao
     */
    private $req;
    
    /**
     * Construtor
     * 
     * @param Requisicao $xml
     */
    public function __construct(Requisicao $requisicao)
    {
        $this->req = $requisicao;
    }
    
    /**
     * Retorna a representação xml da resposta da requisição
     * 
     * @return string
     */
    public function getXML()
    {
        return $this->req->getResposta()->asXML();
    }
    
    /**
     * Retorna o Identificador de Transação gerado
     * 
     * @return integer
     */
    public function getIdentificador()
    {
        return $this->req->getResposta()->tid;
    }
}
