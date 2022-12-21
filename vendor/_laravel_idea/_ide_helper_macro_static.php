<?php //f7d83bc6a6416b43cc59edf234ad3828
/** @noinspection all */

namespace Illuminate\Database\Eloquent {

    /**
     * @method static $this onlyTrashed()
     * @method static int restore()
     * @method static $this withTrashed($withTrashed = true)
     * @method static $this withoutTrashed()
     */
    class Builder {}
}

namespace Illuminate\Http {

    /**
     * @method static bool hasValidRelativeSignature()
     * @method static bool hasValidSignature($absolute = true)
     * @method static bool hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
     * @method static array validate(array $rules, ...$params)
     * @method static void validateWithBag(string $errorBag, array $rules, ...$params)
     */
    class Request {}
}

namespace Illuminate\Support {

    /**
     * @method static $this debug()
     */
    class Collection {}
}

namespace Yajra\DataTables {

    /**
     * @method static $this addTransformer($transformer)
     * @method static $this setSerializer($serializer)
     * @method static $this setTransformer($transformer)
     */
    class DataTableAbstract {}
}
