<?php //0d641992b7bc3c9e942e6394e966ca9d
/** @noinspection all */

namespace Illuminate\Database\Eloquent {

    /**
     * @method $this onlyTrashed()
     * @method int restore()
     * @method $this withTrashed($withTrashed = true)
     * @method $this withoutTrashed()
     */
    class Builder {}
}

namespace Illuminate\Http {

    /**
     * @method bool hasValidRelativeSignature()
     * @method bool hasValidSignature($absolute = true)
     * @method bool hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
     * @method array validate(array $rules, ...$params)
     * @method void validateWithBag(string $errorBag, array $rules, ...$params)
     */
    class Request {}
}

namespace Illuminate\Support {

    /**
     * @method $this debug()
     */
    class Collection {}
}

namespace Yajra\DataTables {

    /**
     * @method $this addTransformer($transformer)
     * @method $this setSerializer($serializer)
     * @method $this setTransformer($transformer)
     */
    class DataTableAbstract {}
}
