<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>各分位載具消費張數金額</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .bg{
        /* 800X559 */
        height: 680px;
        width: 480px;
        background: url("台灣地圖.jpg");
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center;
    }
</style>
</head>
<body>
    
    <div class="text-center"><h2>各縣市 <a style="color: brown;">電腦系統設計服務業</a> <small>消費金額總平均</small></h2></div>
    <div class="container bg">
        <p>&emsp; </p><small class="fst-italic text-end">單位:萬</small>
        <canvas id="myChart"></canvas>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById("myChart");
        const data = {
            datasets: [
            {
    label: '   ',
    data:[ {
                    x: 0,
                    y: 100,
                    r: 1
                }],
    backgroundColor: 'rgb(60, 99, 132,0)',
    },
    {
    label: '    ',
    data:[ {
                    x: 100,
                    y: 100,
                    r: 1
                }],
    backgroundColor: 'rgb(60, 99, 132,0)',
    },
    {
    label: '    ',
    data:[ {
                    x: 100,
                    y: 100,
                    r: 1
                }],
    backgroundColor: 'rgb(60, 99, 132,0)',
    },
    {
    label: '    ',
    data:[ {
                    x: 100,
                    y: 100,
                    r: 1
                }],
    backgroundColor: 'rgb(60, 99, 132,0)',
    },
    {
    label: '    ',
    data:[ {
                    x: 0,
                    y:0,
                    r: 1
                }],
    backgroundColor: 'rgb(60, 99, 132,0)',
    },
    {
    label: '    ',
    data:[ {
                    x: 0,
                    y:0,
                    r: 1
                }],
    backgroundColor: 'rgb(60, 99, 132,0)',
    }
    ,{
      label: '台北市18.5165萬',
      data:[{
                	x: 72,
                	y: 94,
                    //r=半徑
                	r: 0.6
            	}],
    backgroundColor: 'rgb(255, 99, 132)',
    },
    {
      label: '新北市',
      data:[ {
                	x: 54,
                	y: 98,
                	r: 10
            	}],
    backgroundColor: 'rgb(60, 99, 132)',
    },
    {
      label: '基隆市',
      data:[ {
                	x: 90,
                	y:90,
                	r: 10
            	}],
    backgroundColor: 'rgb(60, 99, 132)',
    },
    {
      label: '桃園市',
      data:[ {
                	x: 90,
                	y: 45,
                	r: 10
            	}],
    backgroundColor: 'rgb(60, 99, 132)',
    },
    {
      label: '宜蘭市',
      data:[ {
                	x: 0,
                	y: 100,
                	r: 1
            	}],
    backgroundColor: 'rgb(60, 99, 132)',
    },
    {
      label: '嘉義市',
      data:[ {
                	x: 0,
                	y: 100,
                	r: 1
            	}],
    backgroundColor: 'rgb(60, 99, 132)',
    },
    {
      label: '新竹縣',
      data:[ {
                	x: 0,
                	y: 100,
                	r: 1
            	}],
    backgroundColor: 'rgb(60, 99, 132)',
    },
    {
      label: '新竹市',
      data:[ {
                	x: 0,
                	y: 100,
                	r: 1
            	}],
    backgroundColor: 'rgb(60, 99, 132)',
    },
    {
      label: '台南市',
      data:[ {
                	x: 0,
                	y: 100,
                	r: 1
            	}],
    backgroundColor: 'rgb(60, 99, 132)',
    },
    {
      label: '台中市',
      data:[ {
                	x: 0,
                	y: 100,
                	r: 1
            	}],
    backgroundColor: 'rgb(60, 99, 132)',
    },
    {
      label: '彰化縣',
      data:[ {
                	x: 0,
                	y: 100,
                	r: 1
            	}],
    backgroundColor: 'rgb(60, 99, 132)',
    },
    {
      label: '雲林縣',
      data:[ {
                	x: 0,
                	y: 100,
                	r: 1
            	}],
    backgroundColor: 'rgb(60, 99, 132)',
    },
    {
      label: '高雄市',
      data:[ {
                	x: 0,
                	y: 100,
                	r: 1
            	}],
    backgroundColor: 'rgb(60, 99, 132)',
    },
    {
      label: '嘉義縣',
      data:[ {
                	x: 0,
                	y: 100,
                	r: 1
            	}],
    backgroundColor: 'rgb(60, 99, 132)',
    },
    {
      label: '花蓮縣',
      data:[ {
                	x: 0,
                	y: 100,
                	r: 1
            	}],
    backgroundColor: 'rgb(60, 99, 132)',
    }
  ]
 };

 const config = {
        	type: 'bubble',
        	data: data,
        	options: {
            		maintainAspectRatio: false,
                    plugins: {
                        legend:{
                            position: 'bottom',
                            labels:{
                                padding:10
            }
    // here goes original or customized code of your generateLabels callback
}
                            }
                        
                    
        	},
            
};



        const myChart = new Chart(ctx,config)
    </script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
