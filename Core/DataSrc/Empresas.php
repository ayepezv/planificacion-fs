<?php
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2021-2025 Carlos Garcia Gomez <carlos@facturascripts.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace FacturaScripts\Core\DataSrc;

use FacturaScripts\Core\Cache;
use FacturaScripts\Core\Tools;
use FacturaScripts\Dinamic\Model\CodeModel;
use FacturaScripts\Dinamic\Model\Empresa;

final class Empresas implements DataSrcInterface
{
    /**
     * @var Empresa[]
     */
    private static $list;

    /**
     * @return Empresa[]
     */
    public static function all(): array
    {
        if (!isset(self::$list)) {
            self::$list = Cache::remember('model-Empresa-list', function () {
                return Empresa::all([], ['nombre' => 'ASC'], 0, 0);
            });
        }

        return self::$list;
    }

    public static function clear(): void
    {
        self::$list = null;
    }

    public static function codeModel(bool $addEmpty = true): array
    {
        $codes = [];
        foreach (self::all() as $empresa) {
            $codes[$empresa->idempresa] = $empresa->nombre;
        }

        return CodeModel::array2codeModel($codes, $addEmpty);
    }

    public static function default(): Empresa
    {
        $idempresa = Tools::settings('default', 'idempresa');
        return self::get($idempresa);
    }

    /**
     * @param string $code
     *
     * @return Empresa
     */
    public static function get($code): Empresa
    {
        foreach (self::all() as $item) {
            if ($item->primaryColumnValue() == $code) {
                return $item;
            }
        }

        return new Empresa();
    }
}
