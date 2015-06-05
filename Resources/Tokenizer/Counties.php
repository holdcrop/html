<?php

namespace Resources\Tokenizer;

class Counties {

    /**
     * @var array
     */
    protected $_counties = array(
        'Antrim'    => 27,
        'Armagh'    => 28,
        'Carlow'    => 10,
        'Cavan'     => 25,
        'Clare'     => 16,
        'Cork'      => 15,
        'Derry'     => 31,
        'Donegal'   => 24,
        'Down'      => 32,
        'Dublin'    => 1,
        'Fermanagh' => 30,
        'Galway'    => 19,
        'Kerry'     => 14,
        'Kildare'   => 3,
        'Kilkenny'  => 11,
        'Laois'     => 8,
        'Leitrim'   => 23,
        'Limerick'  => 17,
        'Longford'  => 5,
        'Louth'     => 9,
        'Mayo'      => 20,
        'Meath'     => 2,
        'Monaghan'  => 26,
        'Offaly'    => 6,
        'Roscommon' => 21,
        'Sligo'     => 22,
        'Tipperary' => 18,
        'Tyrone'    => 29,
        'Waterford' => 12,
        'Westmeath' => 7,
        'Wexford'   => 13,
        'Wicklow'   => 4
    );

    /**
     * @return array
     */
    public function getCounties() {
        return $this->_counties;
    }
}