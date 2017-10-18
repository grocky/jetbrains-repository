<?php

#if (${NAMESPACE})
namespace ${NAMESPACE};

#end
class ${NAME} extends#if(${NAMESPACE}) \AbstractMinimalTest #else AbstractMinimalTest #end {

}
