using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace MyPHPWebService
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

       

        private void Form1_Load(object sender, EventArgs e)
        {

        }

       

        private void btnMul_Click(object sender, EventArgs e)
        {
            MyPhpSoapServer.MyPortTypeClient client = new MyPhpSoapServer.MyPortTypeClient();

            txtRes.Text = client.MulData(int.Parse(txtFirst.Text.Trim()), int.Parse(txtSecond.Text.Trim()));
        }

        private void btnSum_Click(object sender, EventArgs e)
        {
            MyPhpSoapServer.MyPortTypeClient client = new MyPhpSoapServer.MyPortTypeClient();

            txtRes.Text = client.SumData(int.Parse(txtFirst.Text.Trim()), int.Parse(txtSecond.Text.Trim()));
        }
    }
}
