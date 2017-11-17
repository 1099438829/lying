<?php
namespace console\tool\controller;

/**
 * Class IndexCtrl
 * @package console\tool\controller
 */
class IndexCtrl extends BaseTool
{
    /**
     * LOGO
     */
    private static $LOGO = <<<EOL
     __        __
    / / __ __ /_/__  __ ____
   / / / // // //  \/ // _  \
  / /_/ // // // /\  // // /
 /____\_  //_//_/ /_/_\_  /
    /____/          \____/
EOL;

    /**
     * @var array
     */
    private static $TOOLS = [
        1 => ['Model Create', [ModelTool::class, 'create']],
        2 => ['Model Update', [ModelTool::class, 'update']],
        0 => ['Exit'],
    ];

    /**
     * @inheritdoc
     */
    protected function init()
    {
        parent::init();
        $this->stdOut(self::$LOGO);
    }

    /**
     * 选择工具
     */
    public function index()
    {
        foreach (self::$TOOLS as $id => $tool) {
            $this->stdOut("{$id}: {$tool[0]}");
        }
        $this->stdOut("Type the number into the corresponding tool:", false);
        $toolId = $this->stdIn();
        if (isset(self::$TOOLS[$toolId])) {
            call_user_func([new self::$TOOLS[$toolId][1][0](), self::$TOOLS[$toolId][1][1]]);
        } elseif ($toolId === '0') {
            exit(0);
        } else {
            $this->stdErr("Unknown tool");
        }
    }
}
