// 同步
class DonePlugin {
  apply(compiler){
    compiler.hooks.done.tap('DonePlugin',(stats)=>{
      console.log('编译完成~~')
    })
  }
}

module.exports = DonePlugin